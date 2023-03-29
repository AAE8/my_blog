<?php

require('connect.php');

function tt($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
};

function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
// Запрос на получение данных с одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    // tt($sql);
    // exit();


    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    // fetchAll - выбрать все строки, fetch - выбрать одну строку
    return $query->fetchAll();
}

// Запрос на получение одной строки с таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    // $sql = $sql . " LIMIT 1";

    // tt($sql);
    // exit();


    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    // fetchAll - выбрать все строки, fetch - выбрать одну строку
    return $query->fetch();
}

$params = [
    'admin' => 1,
    'username' => 'adam'
];

// tt(selectOne('users'));
// tt(selectAll('users', $params));

// Запись в таблицу БД
function insert($table, $params) {
    global $pdo;
    // $sql = "INSERT INTO $table (admin, username, email, password) VALUES ('1', 'fourth', 'fourth@test.ru', '4444')";
    // $sql = "INSERT INTO $table (admin, username, email, password) VALUES (:adm, :user, :mail, :pass)";
    $i = 0;
    $coll = '';
    $mask = '';
    foreach($params as $key => $value){
        if($i === 0){
            $coll = $coll . "$key";
            $mask = $mask ."'" . "$value" . "'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

    // tt($sql);
    // exit();

    // $arrData = [
    //     'adm' => '0',
    //     'user' => '22',
    //     'mail' => 're233@re.ru',
    //     'pass' => 'gagdfgsdf'
    // ];


    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    // чтобы вернуть значение id есть команда: lastInsertId()
    return $pdo->lastInsertId();

}

$arrData = [
        'admin' => '1',
        'username' => 'Andrewsdaa',
        'email' => 're@re.rudassa',
        'password' => 'asdasdadasda',
        'created' => '2023-03-29 17:30:40'
];

// insert('users', $arrData);


// Изменение строки в таблице
function update($table, $id, $params) {
    global $pdo;
    $i = 0;
    $str = '';
    foreach($params as $key => $value){
        if($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str . ", " . $key . "= '" . $value . "'";
        }
        $i++;
    }
    // UPDATE `users` SET username='test', password ='5555' WHERE `id`=14
    $sql = "UPDATE $table SET $str WHERE id = $id";
    // tt($sql);
    // exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

$params = [
    'admin' => '1',
    // 'password' => '333',
    // 'id' => 6,
    // 'email' => 'rr@gmail.com'
];

// update('users', 6, $params);

// Удаление
function delete($table, $id) {
    global $pdo;
    
    // DELETE FROM `users` WHERE id = 19
    $sql = "DELETE FROM $table WHERE id = $id";
    // tt($sql);
    // exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

// delete('users', 11);

?>
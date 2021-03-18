<?php
// $host="localhost";
// $username = "root";
// $password = "";
// $db = "products";
require "config.php";

try{
    $sql = "CREATE DATABASE IF NOT EXISTS " . $db . ";  SELECT DATABASE()";
    $pdo     = new PDO('mysql:localhost=' . $host, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec($sql);

    $create_table = "USE ". $db . "; CREATE TABLE  users (
            id int(6) AUTO_INCREMENT NOT NULL,
            name VARCHAR(40) NOT NULL,
            phone VARCHAR(40) NOT NULL,
            trufa int(50) NOT NULL,
            brownie int (10) NOT NULL,
            ovo int(5) NOT NULL,
            tele int(10) NOT NULL,
            total int(10) NOT NULL,
            PRIMARY KEY (`id`))";
            

    $pdo->exec($create_table);


}
catch (PDOException $e) {
    echo  "<br>" . $e->getMessage();
}

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=products;charset=utf8", 'root', '');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
    return $pdo;
}

function create($table, $fields){
    if(!is_array($fields)){
        $fields = (array) $fields;
    }
    
    $sql ="insert into {$table}";
    $sql.="(".implode(',', array_keys($fields)).")";
    $sql.=" values(".":". implode(',:', array_keys($fields)).")";

    $pdo = connect();

    $insert = $pdo -> prepare($sql);

    return $insert->execute($fields);
}

function all($table){

    $pdo = connect();

    $sql = "select * from {$table}";
    $list = $pdo->query($sql);
    
    $list->execute();

    return $list->fetchAll();

}
function update($table, $fields, $where){
    if(!is_array($fields)){
        $fields = (array) $fields;
    }
    
    $pdo = connect();
    $data = array_map(function ($field) {
        return "{$field} = :{$field}";
    }, array_keys($fields));

    $sql = "update {$table} set ";

    $sql .= implode(',',$data);

    $sql .= " where {$where[0]} = :{$where[0]}"; 

   
    $data = array_merge($fields, [$where[0] => $where[1]]);
    
    $update = $pdo->prepare($sql);

    $update->execute($data);
   
    return $update->rowCount();
}

    function find($table, $field, $value){
    $pdo = connect();

    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    $sql = "select * from {$table} where {$field} = :{$field}";

    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();

    return $find -> fetch();
}

function delete($table, $field, $value) {
    $pdo = connect();

    $sql = "delete from {$table} where {$field} = :{$field}";
    $delete = $pdo->prepare($sql);
    $delete->bindValue($field,$value);

    return $delete->execute();
    
}
<?php

function dd($dump){

    var_dump($dump);
    die();
}
function request(){
    $request = $_SERVER['REQUEST_METHOD'];

    if($request = 'POST'){
        return $_POST;
    }
}
    return $_GET;

function redirect($target){
    return header("location:/CursoPHP/public?page={$target}");
}

function redirectToHome(){
    return header("location:/CursoPHP/public?page=home");
}


?>
<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos');

    return redirect("create_user");
}

$validate = validate([
    'id' => 'i',
    'name' => 's',
    'phone' => 'i',
    'trufa' => 'i',
    'brownie' => 'i',
    'ovo' => 'i',
    'tele' => 'i',
    'total' => 'i',
    
]);

$cadastrado = create('users', $validate);

if($cadastrado){
    flash('message', 'Cadastrado com sucesso', 'sucesso');

    return redirectToHome();
}
flash('message', 'Erro ao cadastrar');
redirect('create_user');
?>
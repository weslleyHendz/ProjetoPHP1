<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
    flash('message', 'Preencha todos os campos');

    return redirect("edit_user&id=".$id);
}

$validate = validate([
    'name' => 's',
    'phone' => 'i',
    'trufa' => 'i',
    'brownie' => 'i',
    'ovo' => 'i',
    'tele' => 'i',
    'total' => 'i',
    
]);

$atualizado = update('users', $validate, ['id', $id]);

if($atualizado){
    flash('message', 'Cadastrado atualizado com sucesso', 'sucesso');

    return redirect("edit_user&id=" . $id);
}
    flash('message', 'Erro ao atualizar');
        redirect("edit_user&id=" . $id);
?>
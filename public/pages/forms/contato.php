<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos');

    return redirect("contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',

]);

$data = [
    'quem' => $validate ->email,
    'para' => 'hendzweslley@gmail.com',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject,
];

if(send($data)) {
    flash('message', 'Email enviado com sucesso', 'sucess');

    return redirect("contato");
}
?>

<h2> Contato </h2>

<?=get('message') ?>
<form action="pages/forms/contato.php" method="POST" role="form">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
    <form action="" method="POST" role="form">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail">
    </div>

    <div class="form-group">
    <form action="" method="POST" role="form">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite o Assunto">
    </div>

    <div class="form-group">
    <form action="" method="POST" role="form">
        <label for="">Mensagem</label>
        <textarea name="message"  cols="30" rows="10" class="form-control"> </textarea>
    </div>

<button type="submit" class="btn btn-primari">Submit</button>
</form>
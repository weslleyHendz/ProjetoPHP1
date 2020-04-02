<?=get('message');?>

<?php
$user = find('users', 'id', $_GET['id']);


?>
<form action="pages/forms/update_user.php" method="POST" role="form">

<div class="form-group">
        <label for="">Nome Completo</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Telefone</label>
        <input type="text" class="form-control" name="phone" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Trufas</label>
        <input type="text" class="form-control" name="trufa" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Brownie</label>
        <input type="int" class="form-control" name="brownie" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Ovos de colher</label>
        <input type="text" class="form-control" name="ovo" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Tele-Entrega</label>
        <input type="text" class="form-control" name="tele" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Valor Total</label>
        <input type="text" class="form-control" name="total" placeholder="Input field">
    </div>
    
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
<?=get('message');?>

<form action="pages/forms/create_user.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome Completo</label>
        <input type="text" class="form-control" name="name" placeholder="Nome Completo">
    </div>

    <div class="form-group">
        <label for="">Telefone</label>
        <input type="text" class="form-control" name="phone" placeholder="Telefone">
    </div>

    <div class="form-group">
        <label for="">Trufas</label>
        <input type="text" class="form-control" name="trufa" placeholder="Trufas">
    </div>

    <div class="form-group">
        <label for="">Brownie</label>
        <input type="int" class="form-control" name="brownie" placeholder="Brownie">
    </div>

    <div class="form-group">
        <label for="">Ovos de colher</label>
        <input type="text" class="form-control" name="ovo" placeholder="Ovos de colher">
    </div>
    <div class="form-group">
        <label for="">Tele-Entrega</label>
        <input type="text" class="form-control" name="tele" placeholder="Tele-Entrega">
    </div>

    <div class="form-group">
        <label for="">Valor Total</label>
        <input type="text" class="form-control" name="total" placeholder="Valor Total">
    </div>


    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
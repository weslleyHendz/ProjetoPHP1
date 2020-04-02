<a href="?page=create_user"><button autofocus="autofocus">Cadastrar user</a></button>
<br>
<a href="?page=contato"><button autofocus="autofocus">Contato</a></button>

<h2>Página inicial</h2>
<?=get('message');?>
<table class="table table-striped table-hover">
    <thead>
            <tr>
            <th>Nome completo</th>
            <th>Telefone</th>
            <th>Trufas(R$)</th>
            <th>Brownies(R$)</th>
            <th>Ovos(R$)</th>
            <th>Tele(R$)</th>
            <th>Valor Total (R$)</th>
        </tr>
    
    </thead>
    <tbody>
        <?php
            $users = all('users');
            foreach ($users as $user):
?>
    
        <tr>
            <td><?=$user->name;?></td>
            <td><?=$user->phone;?></td>
            <td><?=$user->trufa;?></td>
            <td><?=$user->brownie;?></td>
            <td><?=$user->ovo;?></td>
            <td><?=$user->tele;?></td>
            <td><?=$user->total;?></td>

            <td>
                <a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
            </td>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


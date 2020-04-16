<?php

// Iniciar a sessão para guardar o número aleatório.
//session_start();
echo"
    <p> Adivinhe o número que eu estou pensando entre 1 e 100.<br>
    Você possui 7 tentativas!
    </p>

    <form action='#' method='post'>
        <input type='text' name='entrada'>
        <input type='submit' value='Tentar'>
    
    </form><br/>
    <p> Você quer tentar novamente? <br>
    Basta digitar <strong>sim</strong> abaixo e clicar em recomeçar :)

    <form action='#' method='post'>
    <input type='text'name='entrada'>
          
    <input type='submit' value='Recomeçar'>    
    </form><br/>

";
//se o jogo não foi iniciado ainda, inicia a contagem de tentativas e sorteia o número
if(!isset($_SESSION['tentativa'])) {
    $_SESSION['tentativa'] = 0;
    $_SESSION['numero'] = rand(1,100);
}
//se o usuário digitou um número de 1 a 100
if(isset($_POST['entrada']) && $_POST['entrada'] !="sim") {
    //lê a entrada do usuário
    $entrada = $_POST['entrada'];
    //se o número digitado for o mesmo sorteado, exibe a mensagem para reiniciar
    if($_SESSION['numero'] == $entrada) {
        echo "
        <h3>Parabéns, você acertou! <br>O número era <strong> ".$_SESSION['numero'] . "</strong>. <br>
        Você usou<strong> " . $_SESSION['tentativa'] . "</strong> tentativas.<br>
        Para jogar novamente, digite <strong>sim</strong> no campo acime e clique em <strong>Recomeçar</strong>.</h3>";
    
    //se o número for maior ou menor...
    }elseif($_SESSION['numero'] > $entrada){
        echo "O número é maior que " . $entrada. "!";
    } else{
        echo "O número é menor que ". $entrada . "!";
    }
    //incrementa a tentativa
    $_SESSION['tentativa']++;
    if($_SESSION['tentativa'] == "1"){
        echo "<br>Boa sorte";
    
    }elseif($_SESSION >= "3"){
    echo "<br>Você já usou " . $_SESSION['tentativa'] . " tentativa(s)";}
    if($_SESSION['tentativa'] >= "7" && ($_POST['entrada'] != $_SESSION['numero'])){
        unset($_SESSION['numero']);
        unset($_SESSION['tentativa']);

        echo "<h3>Você perdeu, um <strong>novo</strong> número foi sorteado. Boa sorte!</h3>";

    } 
}elseif(isset($_POST['entrada']) && $_POST['entrada'] == "sim"){
    unset($_SESSION['numero']); 
    unset($_SESSION['tentativa']);
    session_destroy();
    echo "Boa sorte";

}
        
    
    
    
//se o usuário digitar sim e clicar em recomeçar, destroi a variável sessão com o número sorteado e tentativas



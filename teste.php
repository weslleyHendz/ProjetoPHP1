<?php

echo "Resposta da questão a):";
$variavel1 = 198;
echo "<br>Tipo de variável: " . gettype($variavel1);

if(is_int($variavel1)):
    echo '<br>A variável $variavel1 é do tipo inteiro';
else:
    echo '<br>A variável $variavel1 não é do tipo inteiro';
endif;

    // Questão b)
echo "<p>Resposta da questão b)";

$variavel2 = array('nome' => 'Pedro Luiz', 'endereco' => 'Av Taquara', 'telefone' => '(51) 5151-51511');
echo "<br>Tipo de variável: " . gettype($variavel2);

if(is_array($variavel2)):
    echo '<br>A variável $variavel2 é um Array.';
else:
    echo '<br>A variável $variavel2 não é um Array.';
endif;

if(array_key_exists ("endereco", $variavel2)):
    echo '<br>O índice "endereco" faz parte do array $variavel2.';
else:
    echo '<br>O índice "endereco" não faz parte do array $variavel2.';
endif;

    // Questão c)
echo "<p>Resposta da questão c)";

$variavel3 = "Romarinho";
echo "<br>Tipo de variável: " . gettype($variavel3);
if(is_string($variavel3)):
    echo '<br>A variável $variavel3 é uma string.';
else:
    echo '<br>A variável $variavel3 não é um string.';
endif;
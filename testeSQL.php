<?php
require "app/function/config.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nitro";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    //Resposta A)
    echo "<h2>Resposta da pergunta A):</h2>";
$sql = "SELECT id, nome_estado FROM estado WHERE nome_estado = 'Paraná'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf ("Nome do Estado: %s<p>", $row[1]);

    //Resposta B)
    echo "<h2>Resposta da pergunta B):</h2>";

$sql = "SELECT nome_estado, nome_pais FROM estado, pais";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "Nome do Estado: " . $row["nome_estado"]."<br>";
  }
} else {
  echo "0 results";
}

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<br>Nome do País: " . $row["nome_pais"] ;
    }
  } else {
    echo "0 results";
  }


for ($i = 0; $i > 4; $i++){
    echo $i;
}
    //Resposta C)
    echo "<h2>Resposta da pergunta C):</h2>";
$sql = "ALTER TABLE pais ADD sigla varchar(2)";
$result = mysqli_query($conn, $sql);

echo "Coluna Sigla criada na tabela pais.<p>";

    //Resposta D)
    echo "<h2>Resposta da pergunta D):</h2>";

$sql = "CREATE TABLE cidade (
    id int NOT NULL,
    nome_cidade int NOT NULL,
    id_estado int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_estado) REFERENCES estado(id))";
    
    if (mysqli_query($conn, $sql)) {
      echo "Tabela criada com sucesso";
    } else {
      echo "Erro na criação da tabela: " . mysqli_error($conn);
    }

mysqli_close($conn);

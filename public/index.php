<?php require "../bootstrap.php";?>

<!DOCTYPE hmtl>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Curso de PHP devclass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php 
        try{
            require load();
        }catch(Exception $e){
            echo $e->getMessage();
}
?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require './inc/Config.inc.php';

    $conn = new Conn();

    $nomenivelacesso  = "gerente";

    $criadoem = "31/01/2022";

    $modificadoem = "31/01/2022";

    try {

        $cadastrar = "INSERT INTO tblnivelacesso(nomenivelacesso, criadoem, modificadoem) VALUES(:nomenivelacesso, :criadoem, :modificadoem)";
    
        $cadastrar = $conn->getConn()->prepare($cadastrar);
    
        $cadastrar->bindParam(':nomenivelacesso', $nomenivelacesso, PDO::PARAM_STR);
    
        $cadastrar->bindParam(':criadoem', $criadoem, PDO::PARAM_STR);
    
        $cadastrar->bindParam(':modificadoem', $modificadoem, PDO::PARAM_STR);
    
        $cadastrar->execute();
    
        if($cadastrar->rowCount()):
    
            echo "Cadastrado com sucesso!";
    
        endif;
    
    } catch (Exception $e) {
    
        //throw $th;
    
    }
    ?>
</body>
</html>
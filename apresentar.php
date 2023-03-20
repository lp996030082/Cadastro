<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Document</title>
</head>
<body>
    <h2>Página apresentar.php</h2>
    <p><b>Nome completo recebido foi: </b><?php echo $_GET["nome_completo"]; ?> </p>
    <p><b>País recebido foi: </b><?php echo $_GET["país"]; ?> </p>
    <p><b>Estado recebido foi: </b><?php echo $_GET["estado"]; ?> </p>
    <p><b>Cidade recebida foi: </b><?php echo $_GET["cidade"]; ?> </p>
    <p><b>Endereço recebido foi: </b><?php echo $_GET["endereço"]; ?> </p>
    <p><b>Data de nascimento recebida foi: </b><?php echo $_GET["data_de_nascimento"]; ?> </p>
    <p><b>Genêro recebido foi: </b><?php echo $_GET["genêro"]; ?> </p>
    <p><b>E-mail recebido foi: </b><?php echo $_GET["e-mail"]; ?> </p>
    <p><b>Telefone recebido foi: </b><?php echo $_GET["telefone"]; ?> </p>
    <p><b>CPF recebido foi: </b><?php echo $_GET["CPF"]; ?> </p>
       <a href="index.php">voltar</a>
</body>
</html>
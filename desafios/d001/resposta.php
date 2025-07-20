<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Desafio 01 resultado</h1>
        <div>
            <?php 
                $numero = $_GET['numero'];
                echo "<p>O número digitado foi: $numero</p>";
                echo "<p>O seu <strong>ANTECESSOR</strong> é: ". $numero - 1 ."</p>";
                echo "<p>Já o seu <strong>SUCESSOR</strong> é: ". $numero + 1 ."</p>";
            ?>
            <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
        </div>
    </main>
</body>
</html>
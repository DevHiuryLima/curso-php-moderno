<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <div>
            <?php 
                $numero = $_POST['numero'] ?? 0;
                
                echo "<p>Analisano o número <strong>". number_format($numero, 3, ",", ".") . "</strong>
                informado pelo usuário:</p>";
                
                $inteira = (int) intval($numero);
                $fracionaria = $numero - $inteira;
                
                echo "<p>A parte inteira do número é <strong>" . number_format($inteira, 0, ",", ".") . "</strong></p>";
                echo "<p>Já a parte fracionaria do número é <strong>" . number_format($fracionaria, 3, ",", ".") . "</strong></p>";
            ?>
        </div>
        <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>
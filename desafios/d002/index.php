<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Trabalhando com números aleatórios</h2>
        <?php 
            // Função antiga do php que sorteia um número entre dois parâmetros dados por você.
            // O algoritmo dessa função da decada de 50 e se chama Linear Gradient Generator. Contudo, a partir da 
            // versão 7.1 do PHP, a função rand() se tornou apenas um apontamento para a função mt_rand(), ou seja, 
            // ela compartilhará o mesmo algoritmo da função mt_rand().
            // $numero = rand(0, 100);

            
            // Essa função é 4x mais rápido que a anterior. O algoritmo dessa função vem de 1997 e se chama Merssenne Twister.
            $numero = mt_rand(0, 100);

            // random_int(), Gera números aleatórios criptograficamente seguros. (É a função mais lenta entre as 3, 
            // portanto é bom usa-la só quando precisar de seugrança).

            echo "<p>Gerando número aleatório de 0 a 100...</p>";
            echo "<p>O valor gerado foi $numero</p>";
        ?>
        <button onclick="document.location.reload()">&#x1F504 Gere novamente</button>
    </main>
</body>
</html>
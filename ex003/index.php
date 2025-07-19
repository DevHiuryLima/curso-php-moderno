<!DOCTYPE html>
<html lang="pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <?php 
        // 0x = hexadecimal 0b = binario 0 = Octal 
        $num = 010;
        echo "O valor da variavel e $num";
        
        echo "<br>";
        
        // Mostra o valor e o tipo primitivo
        $v = 300;
        var_dump($v);
        
        echo "<br>";
        
        // Coerção
        $var = (int) "950";
        var_dump($var);
        
        echo "<br>";
        
        $married = true;
        var_dump($married);
        
        echo "<br>";
        
        $vetor = [
            1, 2, 3, 4,
        ];
        var_dump($vetor);
        
        echo "<br>";

        class Pessoa {
            private string $name;
        };
        
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Mdsystem</title>
</head>
<body>
    <div class="calcImp">
        <form action="" method="POST">
            Valor do Produto: <input type="text" name="valor">
            taxa de impostos em (%5): <input type="text" name="imposto">
            <input type="submit" value="consultar" name="consultar">
        </form>
    </div>
    <br>
    <?php
        
        if (isset($_POST['consultar'])) {
            $impostoTotal = ($_POST['imposto']/100) * $_POST['valor'];
            $totalPagar = $_POST['valor'] - $impostoTotal;
            $valor = $_POST['valor'];
            $imposto = $_POST['imposto'];
            echo "Valor do produto é $valor<br>Imposto é de $imposto% <br> totalizando $impostoTotal <br>
            valor do produto sem os impostos $totalPagar ";
        }
    ?>
    <br><br><br><br><br><br>
    <div class="arrayNumeros">
        <form action="" method="POST">
            Digite numeros para formar um array: <input type="text" name="array">
            <input type="submit" value="Mostar Array" name="enviarNum">
        </form>
    </div>
    <br>
    <?php
     if (isset($_POST['enviarNum'])) {
         $num  = $_POST['array'];
         $numArray = explode(" ", $num);
         foreach ($numArray as $item) {
             echo "$item <br>";
         }
     }
    ?>
</body>
</html>
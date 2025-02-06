<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Candles Calculator</title>
</head>
<body>
    <?php
    $cantidadVelas = isset($_GET['frecuenciaTexto']) ? (int)$_GET['frecuenciaTexto'] : 0;
    $candles = isset($_GET['candles']) ? $_GET['candles'] : [];

    // Si tenemos los tamaños de las velas, calculamos el resultado
    if (!empty($candles)) {
        $resultado = birthdayCakeCandles($candles);
        echo "<h3>Resultado: Hay $resultado velas del tamaño más alto</h3>";
        echo "<hr>";
    }
    ?>

    <!-- Formulario para la cantidad de velas -->
    <form action="birthdayCakeCandles.php" method="get">
        <h2>Paso 1: Introduce la cantidad de velas</h2>
        <input type="number" name="frecuenciaTexto" value="<?php echo $cantidadVelas; ?>" required>
        <input type="submit" value="Continuar">
    </form>

    <?php
    // Formulario para los tamaños de las velas
    if ($cantidadVelas > 0) {
        echo '<h2>Paso 2: Introduce el tamaño de cada vela</h2>';
        echo '<form action="birthdayCakeCandles.php" method="get">';
        echo '<input type="hidden" name="frecuenciaTexto" value="' . $cantidadVelas . '">';
        
        for ($i = 0; $i < $cantidadVelas; $i++) {
            echo 'Vela ' . ($i + 1) . ': ';
            echo '<input type="number" name="candles[]" min="1" required><br>';
        }
        echo '<br><input type="submit" value="Calcular">';
        echo '</form>';
    }

    function birthdayCakeCandles($candles) {
        $tallestCandle=0;
        $candleCounter=0;
        for ($i=0; $i<count($candles);$i++){
            if ($candles[$i]>$tallestCandle){
                $tallestCandle=$candles[$i];
                $candleCounter=1;
            } else if ($candles[$i]==$tallestCandle){
                $candleCounter++;
            }
        }
        return $candleCounter;
    }
    ?>
</body>
</html>

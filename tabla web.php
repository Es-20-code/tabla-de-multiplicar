<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    
    <?php
    // Verificar si el parámetro 'num' está presente en la URL
    if (isset($_GET['num']) && is_numeric($_GET['num'])) {
        $num = intval($_GET['num']); // Convertir a entero

        // Verificar que el número esté entre 1 y 10
        if ($num >= 1 && $num <= 10) {
            echo "<h2>Tabla del $num</h2>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$num x $i = " . ($num * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Por favor, ingresa un número entre 1 y 10 en la barra de dirección.</p>";
        }
    } else {
        echo "<p>Por favor, ingresa un número válido en la barra de dirección usando ?num= seguido de un número.</p>";
    }
    ?>
</body>
</html>

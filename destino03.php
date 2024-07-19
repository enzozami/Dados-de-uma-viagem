<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $kml = filter_input(INPUT_POST, "kml", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $litros = filter_input(INPUT_POST, "litros", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $minutos = filter_input(INPUT_POST, "minutos", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $velocidade = filter_input(INPUT_POST, "velocidade", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        

            $distancia = $velocidade * ($minutos / 60);
            $quantidade = $distancia / $kml;
            $valor = $quantidade * $litros;

            echo"A distancia total percorrida na viagem foi de: " . number_format($distancia, 2, ",", ".") . " km. <br/>";
            echo"A quantidade total de litros utilizado na viagem foi de: " . number_format($quantidade, 2, ",", ".") . " l. <br/>";
            echo"O valor gasto em combustível na viagem foi de: R$" . number_format($valor, 2, ",", ".");   
        ?>
    </div>
</body>
</html>
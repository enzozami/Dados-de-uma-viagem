<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Exercício 01</title>
</head>
<body>
    <div class="container">
        <form action="destino03.php" method="post">
            <h1>INFORMAÇÕES DE UMA VIAGEM SEGUNDO OS DADOS DE UM VEÍCULO</h1>

            <label for="" class="form-label">Digite quantos KM o veículo percorre por litro: </label>
            <input type="number" step="any" name="kml" class="form-control" min="0" required>

            <label for="" class="form-label">Valor do litro do combustível utilizado: </label>
            <input type="number" step="any" name="litros" class="form-control" min="0" required>

            <label for="" class="form-label">Qual o tempo gasto para realizar a viagem [minutos]: </label>
            <input type="number" step="any" name="minutos" class="form-control" min="0" required>
            
            <label for="" class="form-label">Qual a velocidade média do veículo durante a viagem: </label>
            <input type="number" step="any" name="velocidade" class="form-control" min="0" max="250" required>

            <button class="btn btn-success my-2 w-25 d-block mx-auto" type="submit">Calcular!</button>
        </form>
    </div>
</body>
</html>
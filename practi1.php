<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        Calculadora
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="number" class="form-control" id="num1" placeholder="Número 1">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="num2" placeholder="Número 2">
                        </div>
                        <button class="btn btn-primary" id="sumar">Sumar</button>
                        <div class="mt-3">
                            <p id="resultado">Resultado:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sumar').click(function() {
                let num1 = parseInt($('#num1').val());
                let num2 = parseInt($('#num2').val());
                let resultado = num1 + num2;
                $('#resultado').text('Resultado: ' + resultado);
            });
        });
    </script>
</body>
</html>
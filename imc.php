<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Medicion del indice de masa corporal</title>
</head>
<body>
    <main>
        <form class="row justify-content-center row mt-5" action="imc.php" method=POST>
            <div class="col-sm-2">
                <label class="col control-label">Peso</label>
                <div>
                <input type="number" step="any" class="form-control" placeholder="Digite su peso" name="peso">
                </div>
            </div>
            <div class="col-sm-2">
                <label class="col control-label">Altura</label>
                <div>
                <input type="number" step="any" class="form-control" placeholder="Digite su altura" name="altura">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4" name="imc">Calcular</button>
        </form>
    
        
    <?php if(isset($_POST["imc"])): ?>
        <h3 class="text-center">
    <?php
            $peso=$_POST["peso"];
            $altura=$_POST["altura"];

        $imc=$peso/($altura*$altura);   

        if ($imc<18.5)
        {
            echo("Su indice de masa corporal es: ". $imc . " peso insuficiente");
        }
        else if ($imc>18.5 && $imc<24.9)
        {
            echo("Su indice de masa corporal es: ". $imc . " peso normal");
        }
        else if ($imc>25 && $imc<26.9)
        {
            echo("Su indice de masa corporal es: ". $imc . " sobre peso grado I");
        }
        else if ($imc>27 && $imc<29.9)
        {
            echo("Su indice de masa corporal es: ". $imc . " sobre peso grado II");
        }
        else if ($imc>30 && $imc<34.9)
        {
            echo("Su indice de masa corporal es: ". $imc . " obesidad de tipo I");
        }
        else if ($imc>35 && $imc<39.9)
        {
            echo("Su indice de masa corporal es: ". $imc . " sobre peso grado II");
        }
        else if ($imc>40 && $imc<49.9)
        {
            echo("Su indice de masa corporal es: ". $imc . " sobre peso grado III (mórbida)");
        }
        else if ($imc<50)
        {
            echo("Su indice de masa corporal es: ". $imc . " sobre peso grado VI (Extrema)");
        }
        
    
    ?>  
        </h3>


    <?php endif ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Salarios de postobon</title>
</head>
<body>
    
<main>
        <form class="row justify-content-center row mt-5" action="postobon.php" method=POST>
            <div class="col-sm-2">
                <label class="col control-label">Horas</label>
                <div>
                <input type="number" step="any" class="form-control" placeholder="Agregar horas trabajadas" name="horas">
                </div>
            <button type="submit" class="btn btn-success mt-4" name="calcular">Calcular</button>
        </form>

</main>

    <?php if(isset($_POST["calcular"])): ?>
        <h3 class="text-center">

    <?php 
    $valorHora = 20000;
    $valorHoraExtra = 5000;
    $horasTrabajadas=$_POST["horas"];
        if ($horasTrabajadas <= 40)
        {
            $sueldoSemana = $horasTrabajadas * $valorHora;
            echo ("El sueldo de la semana es de: ". $sueldoSemana);
        }
        else if ($horasTrabajadas > 40)
        {
            $sueldoSemana = ($horasTrabajadas * $valorHora);
            $calculoHorasExtra = ($horasTrabajadas - 40) * $valorHoraExtra;
            $sueldoSExtra = $sueldoSemana + $calculoHorasExtra;

            echo ("El sueldo de la semana es de: ". $sueldoSExtra);
        }
    ?>
        </h3>
    <?php endif?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
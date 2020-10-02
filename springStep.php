<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Descuentos por cantidad</title>
</head>
<body>
    <main>
        <form class="row justify-content-center row mt-5" action="springStep.php" method=POST>
            <div class="col-sm-2">
                <label class="col control-label">Cantidad</label>
                <div>
                <input type="number" step="any" class="form-control" placeholder="Agregue la cantidad de pares a comprar" name="pares">
                </div>
            </div>
            <div class="col-sm-2">
                <label class="col control-label">Costo de los Zapatos</label>
                <div>
                <input type="number" step="any" class="form-control" placeholder="Agregue el costo de los zapatos" name="costo">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4" name="calcular">Agregar</button>
        </form>

        <?php if(isset($_POST["calcular"])): ?>
        
        <h1 class="text-center">   
        <?php
        
        $pares=$_POST["pares"];
        $costo=$_POST["costo"];

        if ($pares < 3)
        {
            echo("El numero de pares adquiridos no aplica para el descuento");
        }
        
        else if ($pares == 3)
        {
            $descuento = ($costo * 10) / 100;
            $costo = $costo - $descuento;
            echo("El descuento que adquiere por su compra es del 10% con un valor de: ". $descuento);
            echo("\nEl valor de su compra es de un total de: ". $costo);
        }
        else if ($pares > 3 && $pares <= 8)
        {
            $descuento = ($costo * 20) / 100;
            $costo = $costo - $descuento;
            echo("El descuento que adquiere por su compra es del 20% con un valor de: ". $descuento);
            echo("\nEl valor de su compra es de un total de: ". $costo);
        }
        else if ($pares >= 9 )
        {
            $descuento = ($costo * 50) / 100;
            $costo = $costo - $descuento;
            echo("El descuento que adquiere por su compra es del 50% con un valor de: ". $descuento);
            echo("\nEl valor de su compra es de un total de: ". $costo);
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
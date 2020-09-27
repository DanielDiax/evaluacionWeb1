<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <header>


    </header>
    <main>
    <h3 class="row justify-content-center mt-3">Calculadora</h3>
        <div class="row justify-content-center mt-5">  
            <form class="form-horizontal" action="calculadora.php" method="POST">
                <div class="form-group">
                    <label class="col-lg-4 control-label">Numero 1</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="numero1" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Numero 2</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="numero2" />
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="suma">Suma</button>
                <button type="submit" class="btn btn-info" name="resta">Resta</button>
                <button type="submit" class="btn btn-danger" name="division">Division</button>
                <button type="submit" class="btn btn-dark" name="multiplicacion">Multiplicacion</button>
            </form>
        </div>
    </main>
        <?php if(isset($_POST["suma"])): ?>

        <?php ?>
        
        <?php endif?>
    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
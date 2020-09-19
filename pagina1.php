<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ejercicio 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <section>
        <main>
            <form action="pagina1.php" method="POST">

                <input type="text" name="numero1">
                <select name="opciones">
                    <option value="0"> Sumar </option>
                    <option value="1"> Restar </option>
                    <option value="2"> Multiplicar </option>
                    <option value="3"> Dividir </option>
                </select>
                <input type="text" name="numero2"><br>
                <input type="submit" name="calcular" value="calcular">

            </form>

            <?php if (isset($_POST["calcular"])) : ?>

                <h4>
                    <?php
                    $numero1 = $_POST["numero1"];
                    $numero2 = $_POST["numero2"];
                    $operaciones = $_POST["opciones"];
                    $suma = $numero1 + $numero2;
                    $resta = $numero1 - $numero2;  

                    switch ($operaciones) {
                        case 0:
                            echo (" La suma de $numero1 + $numero2 es igual a : ") . $suma;
                            break;
                        case 1:
                            echo (" La resta de $numero1 - $numero2 es igual a : ") . $resta;
                            break;
                        case 2:
                            echo (" La multiplicacion de $numero1 * $numero2 es igual a : ") . $numero1 * $numero2;
                            break;
                        case 3:
                            echo (" La division de $numero1 / $numero2 es igual a : ") . $numero1 / $numero2;
                            break;
                    }

                    ?>

                </h4>

            <?php endif ?>

        </main>

    </section>







    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>
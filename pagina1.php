<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" type="fabicon/x-icon" href="img/supertux.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 1</title>
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
                        <a class="nav-link" href="index.php" target="_blanck">Home <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <section>

        <aside id="lateral">

            <h3>Calculadora</h3>
            <div id="login" class="aside-box">
                <form action="pagina1.php" method="POST">

                    <label id="user" class="icon">w</label>
                    <input type="text" name="numero1">

                    <label id="password" class="icon">w</label>
                    <input type="text" name="numero2">

                    <input type="submit" name="calcular" value="calcular">
                    <select name="opciones">
                        <option value="0"> Sumar </option>
                        <option value="1"> Restar </option>
                        <option value="2"> Multiplicar </option>
                        <option value="3"> Dividir </option>
                    </select>
                    <a href="index.php" target="_blank">Pagina Principal</a>

                    <?php if (isset($_POST["calcular"])) : ?>

                        <h4>
                            <?php
                            $numero1 = $_POST["numero1"];
                            $numero2 = $_POST["numero2"];
                            $operaciones = $_POST["opciones"];
                            $suma = $numero1 + $numero2;
                            $resta = $numero1 - $numero2;
                            $multiplicacion = $numero1 * $numero2;
                            $division = $numero1 / $numero2;
                            switch ($operaciones) {
                                case 0:
                                    echo ("<label style=font-size:20px >La suma de $numero1 + $numero2 es igual a:</label>");
                                    echo (" <input type='text' value='$suma'/> ");
                                    break;
                                case 1:
                                    echo ("<label style=font-size:20px >La resta de $numero1 - $numero2 es igual a:</label>");
                                    echo ("  <input type='text' value='$resta'/> ");
                                    break;
                                case 2:
                                    echo ("<label style=font-size:20px >La multiplicacion de $numero1 * $numero2 es igual a:</label>");
                                    echo ("  <input type='text' value='$multiplicacion'/> ");
                                    break;
                                case 3:
                                    echo ("<label style=font-size:20px >La division de $numero1 / $numero2 es igual a:</label>");
                                    echo (" <input type='text' value='$division'/> ");
                                    break;
                            }

                            ?>

                        </h4>

                    <?php endif ?>

                </form>
            </div>
        </aside>

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
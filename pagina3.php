<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" type="fabicon/x-icon" href="img/supertux.png" />
    <title>Ejercicio 3</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php " target="_blanck">Home <span class="sr-only">(current)</span></a>
                    </li>
                    </form>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placeimg.com/400/130/arch" class="d-block w-100" alt="imagenslider1">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/400/130/animals" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/400/130/people" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>
    <section>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col">
                    <h1>Formulario</h1>

                    <form action="pagina3.php" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="precioZapatos" placeholder="Precio Zapatos">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="cantidadZapatos" placeholder="Cantidad de Pares de Zapatos">
                            </div>
                        </div>
                        <button type="submit" name="calcular" class="btn btn-primary mt-3">Calcular</button>


                        <?php if (isset($_POST["calcular"])) : ?>

                            <h4>
                                <?php
                                $precioZapatos = $_POST["precioZapatos"];
                                $cantidadZapatos = $_POST["cantidadZapatos"];

                                if ($cantidadZapatos == 3) {
                                    $porcentajeZapatos = $precioZapatos * 0.1;
                                    $totalPagar = $precioZapatos - $porcentajeZapatos;
                                    echo ("<label style=font-size:20px >El total a pagar es:</label>");
                                    echo ("<input type='text' value= $'$totalPagar'>");
                                } else {
                                    if ($cantidadZapatos > 3 && $cantidadZapatos <= 8) {
                                        $porcentajeZapatos = $precioZapatos * 0.2;
                                        $totalPagar = $precioZapatos - $porcentajeZapatos;
                                        echo ("<label style=font-size:20px >El total a pagar es:</label>");
                                        echo ("<input type='text' value= $'$totalPagar'>");
                                    } else {
                                        if ($cantidadZapatos > 8) {
                                            $porcentajeZapatos = $precioZapatos * 0.5;
                                            $totalPagar = $precioZapatos - $porcentajeZapatos;
                                            echo ("<label style=font-size:20px >El total a pagar es:</label>");
                                            echo ("<input type='text' value= $'$totalPagar'>");
                                        } else {
                                            if ($cantidadZapatos < 3) {
                                                $totalPagar =  $precioZapatos;
                                                echo ("<label style=font-size:20px >El total a pagar es:</label>");
                                                echo ("<input type='text' value= $'$totalPagar'>");
                                            }
                                        }
                                    }
                                }
                                ?>

                            </h4>

                        <?php endif ?>


                    </form>

                </div>
            </div>
        </div>
    </section>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
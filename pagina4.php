<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" type="fabicon/x-icon" href="img/supertux.png" />
    <title>Ejercicio 4</title>
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
                    <img src="https://placeimg.com/500/130/arch" class="d-block w-100" alt="imagenslider1">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/500/130/animals" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/500/130/people" class="d-block w-100" alt="...">
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
                    <div id="banner">
                        <h1>Nomina Postobon</h1>
                    </div>
                    <form action="pagina4.php" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="cantidadHorasTrabajadas" placeholder="Ingrese la cantidad de horas trabajadas">
                            </div>
                        </div>
                        <button type="submit" name="calcular" class="btn btn-primary mt-3">Calcular</button>


                        <?php if (isset($_POST["calcular"])) : ?>

                            <h4>
                                <?php
                                $cantidadHorasTrabajadas = $_POST["cantidadHorasTrabajadas"];


                                if ($cantidadHorasTrabajadas <= 40) {
                                    $sueldoSemanal = $cantidadHorasTrabajadas * 20000;
                                    echo ("<label style=font-size:20px >El total a pagar es:</label>");
                                    echo ("<input type='text' value= $$sueldoSemanal>");
                                } else {
                                    if ($cantidadHorasTrabajadas > 40) {
                                        $horasExtras = ($cantidadHorasTrabajadas - 40);
                                        $costoHorasExtras = $horasExtras * 25000;
                                        $sueldoSemanal = ($cantidadHorasTrabajadas - $horasExtras) * 20000;
                                        $sueldoTotal = $sueldoSemanal + $costoHorasExtras;
                                        echo ("<label style=font-size:20px >El total a pagar es:</label>");
                                        echo ("<input type='text' value= $$sueldoTotal>");
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
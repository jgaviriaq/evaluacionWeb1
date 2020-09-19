<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" type="fabicon/x-icon" href="img/supertux.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ejercicio 2</a>
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

            <h3>CALCULO IMC</h3>
            <div id="login" class="aside-box">
                <form action="pagina2.php" method="POST">

                    <label id="user" class="icon">w</label>
                    <input type="text" name="peso" placeholder="Ingrese el peso">

                    <label id="password" class="icon">w</label>
                    <input type="text" name="altura" placeholder="Ingrese su altura">

                    <input type="submit" name="calcular" value="calcular">

                    <?php if (isset($_POST["calcular"])) : ?>

                        <h4>
                            <?php
                            $peso = $_POST["peso"];
                            $altura = $_POST["altura"];
                            $IMC = $peso / ($altura * $altura);

                            if ($IMC < 18.5) {
                                echo ("<label style=font-size:20px > IMC = Peso Insuficiente</label>");
                                echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
                            } else {
                                if ($IMC >= 18.5 && $IMC <= 24.9) {
                                    echo ("<label style=font-size:20px  > IMC = PESO Normal</label>");
                                    echo ("<label id='password' class='icon' >.</label>  <input type='text' value='$IMC'/>");
                                } else {
                                    if ($IMC >= 25 && $IMC <= 26.9) {
                                        echo ("<label style=font-size:20px> IMC= SOBREPESO GRADO I</label>");
                                        echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
                                    } else {
                                        if ($IMC >= 27 && $IMC <= 29.9) {
                                            echo ("<label style=font-size:20px> IMC= SOBREPESO GRADO II</label>");
                                            echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
                                        } else {
                                            if ($IMC >= 30 && $IMC <= 34.9) {
                                                echo ("<label style=font-size:20px> IMC= OBESIDAD GRADO I</label>");
                                                echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
                                            }
                                            else{
                                                if($IMC >= 35 && $IMC <= 39.9){
                                                    echo ("<label style=font-size:20px> IMC= OBESIDAD GRADO II</label>");
                                                    echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
                                                }
                                                else{
                                                    if($IMC >= 40 && $IMC <= 49.9){
                                                        echo ("<label style=font-size:20px> IMC= OBESIDAD GRADO III</label>");
                                                        echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
    
                                                    }
                                                    else{
                                                        if($IMC >= 50){
                                                            echo ("<label style=font-size:20px> IMC= OBESIDAD GRADO IV</label>");
                                                            echo ("<label id='password' class='icon' >\</label>  <input type='text' value='$IMC'/>");
    
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
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
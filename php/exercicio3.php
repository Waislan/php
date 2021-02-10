<?php

$resposta = 0;

function calculaImc()
{

    $peso = $_POST['inputPeso'];
    $altura = $_POST['inputAltura'];

    $imc = $peso / ($altura * $altura);

    return number_format($imc, 2, ',', '');
}

if (isset($_POST['submit'])) {
    $resposta = calculaImc();
} else {
    $resposta = 'error';
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'php-head.php' ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="../index3.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                echo 'Valor do IMC: ' . $resposta;
                                ?>
                            </label>
                        </div>
                        
                        <div class="row justify-content-center">

                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index3.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index4.php">Próximo</a></button>
                            </div>

                        </div>
                    </div>
                </form>

            </div>

        </div>
        <!--Grid column-->
    </div>

</body>

</html>
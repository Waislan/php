<?php
$horasTrabalhadas = $_POST['inputHorasTrabalhadas'];
$valorHora = $_POST['inputValorHora'];
$valorHoraExtra = $valorHora + $valorHora * 0.5;
$horaExtra = $horasTrabalhadas - 160;

if ($horaExtra < 0){
    $horaExtra = 0;
}

$salario = $valorHora * $horasTrabalhadas + $valorHoraExtra * $horaExtra;

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

                <form action="../index7.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                if ($horaExtra > 0) {
                                    echo 'Salário total de R$ ' . number_format($salario, 2, ',', '') . ' com horas extras';
                                } else {
                                    echo 'Salário total de R$ ' . number_format($salario, 2, ',', '') . ' sem horas extras';
                                }
                                ?>
                            </label>
                        </div>
                        
                        <div class="row justify-content-center">

                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index7.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index8.php">Próximo</a></button>
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
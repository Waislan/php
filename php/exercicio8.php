<?php
$salarioFixo = $_POST['inputSalarioFixo'];
$valorVendas = $_POST['inputValorVendas'];

if ($valorVendas <= 1500) {
    $comissao = 0.3 * $valorVendas;
} else {
    $comissao = 0.3 * 1500 + 0.5 * ($valorVendas - 1500);
}

$salarioFinal = $salarioFixo + $comissao;

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

                <form action="../index8.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                if ($comissao != 0) {
                                    echo 'Salário total de R$ ' . number_format($salarioFinal, 2, ',', '') . ' com comissão';
                                } else {
                                    echo 'Salário total de R$ ' . number_format($salarioFinal, 2, ',', '') . ' sem comissão';
                                }
                                ?>
                            </label>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index8.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index9.php">Próximo</a></button>
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
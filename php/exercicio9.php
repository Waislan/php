<?php
$quantidadeCombustivel = $_POST['inputQuantidadeCombustivel'];
$tipoCombustivel = $_POST['selectTipoCombustivel'];
$precoGasolina = 3.3;
$precoAlcool = 2.9;
$precoVenda = 0;
$desconto = 0;

if ($tipoCombustivel == 0) {
    $precoVenda = $quantidadeCombustivel * $precoAlcool;

    if ($quantidadeCombustivel <= 20) {
        $desconto = 0.03 * $precoVenda;
    } else {
        $desconto = 0.05 * $precoVenda;
    }
} else {
    $precoVenda = $quantidadeCombustivel * $precoGasolina;

    if ($quantidadeCombustivel <= 20) {
        $desconto = 0.04 * $precoVenda;
    } else {
        $desconto = 0.06 * $precoVenda;
    }
}
$precoFinal = $precoVenda - $desconto;

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

                <form action="../index9.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                echo 'Valor final de R$ ' . number_format($precoFinal, 2, ',', '');
                                ?>
                            </label>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index9.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index10.php">Próximo</a></button>
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
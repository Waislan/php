<?php
$data = $_POST['inputNumero'];
$resposta = 0;

if (!is_numeric($data)) {
    $resposta = 'erro';
} else {
    if ($data > 0) {
        $resposta = 'Positivo';
    } else if ($data == 0) {
        $resposta = 'Igual a zero';
    } else {
        $resposta = 'Negativo';
    }
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

                <div class="content">
                    <div class="row justify-content-center">
                        <label>
                            <?php echo $resposta; ?>
                        </label>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="../index.php">Voltar</a></button>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="../index2.php">Próximo</a></button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--Grid column-->
    </div>

</body>

</html>
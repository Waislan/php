<?php
$data = $_GET['inputNumero'];
$resposta[] = array(11);

if (!is_numeric($data)) {
    $resposta = 'erro';
} else {
    for ($i = 0; $i <= 10; $i++) {
        $resposta[$i] = $i * $data;
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

                <form action="../index2.php">
                
                    <div class="content">
                        <div class="row justify-content-center">
                            <label>
                                <?php
                                foreach ($resposta as $index) {
                                    echo $index;
                                    if ($resposta[sizeof($resposta) - 1] != $index) {
                                        echo ', ';
                                    } else {
                                        echo '.';
                                    }
                                }
                                ?>
                            </label>
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index2.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index3.php">Próximo</a></button>
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
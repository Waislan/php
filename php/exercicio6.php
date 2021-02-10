<?php
$nota1 = $_POST['inputNota1'];
$nota2 = $_POST['inputNota2'];
$nota3 = $_POST['inputNota3'];
$media = ($nota1 + $nota2 + $nota3) / 3;
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

                <form action="../index6.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                if ($media >= 6) {
                                    echo 'Média: ' . number_format($media, 2, ',', '') . '<br \>';
                                    echo 'Aprovado';
                                } else {
                                    echo 'Média: ' . number_format($media, 2, ',', '') . '<br \>';
                                    echo 'Reprovado';
                                }
                                ?>
                            </label>
                        </div>
                        
                        <div class="row justify-content-center">

                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index6.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index7.php">Próximo</a></button>
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
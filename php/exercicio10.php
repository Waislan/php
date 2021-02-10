<?php
$anoNascimento = $_POST['inputAnoNascimento'];
$anoIngresso = $_POST['inputAnoIngresso'];
$idade = 2021 - $anoNascimento;
$tempoTrabalho = 2021 - $anoIngresso;

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
                            <?php
                            echo 'Idade do funcionário: ' . number_format($idade, 0, '', '') . ' anos' . '<br />';
                            echo 'Tempo de trabalho na empresa: ' . number_format($tempoTrabalho, 0, '', '') . ' anos' . '<br />';

                            if ($idade >= 65 || $tempoTrabalho >= 35 || ($idade >= 60 && $tempoTrabalho >= 25)) {
                                echo 'Requerer aposentadoria';
                            } else {
                                echo 'Não requerer aposentadoria';
                            }
                            ?>
                        </label>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="../index10.php">Voltar</a></button>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="../index11.php">Próximo</a></button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!--Grid column-->
    </div>

</body>

</html>
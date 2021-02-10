<?php
$salarioAtual = $_POST['inputSalarioAtual'];
$percentual = $_POST['inputPercentual'];
$novoSalario = $salarioAtual + ($salarioAtual * $percentual);
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

                <form action="../index5.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                echo 'Valor do novo salário: R$ ' . number_format($novoSalario, 2, ',', '');
                                ?>
                            </label>
                        </div>
                        
                        <div class="row justify-content-center">

                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index5.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index6.php">Próximo</a></button>
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
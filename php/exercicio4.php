<?php
$preco = $_POST['inputPreco'];
$custoDistribuidor = 0.28 * $preco;
$custoImpostos = 0.48 * $preco;
$custoFinal = $preco + $custoImpostos + $custoDistribuidor;
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

                <form action="../index4.php">

                    <div class="content">

                        <div class="row justify-content-center">
                            <label>
                                <?php
                                echo 'Valor final do carro: R$ ' . number_format($custoFinal, 2, ',', '');
                                ?>
                            </label>
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index4.php">Voltar</a></button>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <button type="button" class="btn btn-primary"><a href="../index5.php">Próximo</a></button>
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
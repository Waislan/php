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
                            echo 'Nome: ' . $_POST['inputNome'] . '<br />';
                            echo 'Email: ' . $_POST['inputEmail'] . '<br />';
                            echo 'CPF: ' . $_POST['inputCpf'] . '<br />';
                            echo 'Idade: ' . $_POST['inputIdade'] . ' anos';
                            ?>
                        </label>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="../index11.php">Voltar</a></button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!--Grid column-->
    </div>

</body>

</html>
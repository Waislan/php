<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio10.php" method="POST">

                    <div class="row">
                        <label for="inputAnoNascimento">Informe o ano de nascimento do funcionário</label>
                        <input class="form-control" id="inputAnoNascimento" name="inputAnoNascimento" placeholder="aaaa" required>

                        <label for="inputAnoIngresso">Informe o ano de ingresso na empresa</label>
                        <input class="custom-select" id="inputAnoIngresso" name="inputAnoIngresso" placeholder="aaaa" required>
                        </input>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index9.php">Voltar</a></button>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <button id="submit" name="submit" type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <!--Grid column-->
    </div>

</body>

<script type="text/javascript" src="js/index10.js"></script>

</html>
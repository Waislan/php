<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio2.php" method="GET">
                    <div class="form-group">
                        <label for="inputNumero">Envie um número para saber sua tabuada</label>
                        <input class="form-control" id="inputNumero" name="inputNumero" placeholder="Digite um número">
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index.php">Voltar</a></button>
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

</html>
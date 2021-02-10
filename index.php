<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form class="card-body" action="php/exercicio1.php" method="POST">
                    <div class="form-group">
                        <label for="inputNumero">Envie um número para saber se é positivo, negativo ou igual a zero</label>
                        <input class="form-control" id="inputNumero" name="inputNumero" placeholder="Digite um número">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary justify-content-center">Enviar</button>
                    </div>
                </form>

            </div>

        </div>
        <!--Grid column-->
    </div>

</body>

</html>
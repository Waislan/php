<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio6.php" method="POST">

                    <div class="form-group">
                        <label for="inputNota1">Insira as três notas para saber se o aluno foi aprovado</label>
                        <input class="form-control" id="inputNota1" name="inputNota1">
                        <input class="form-control" id="inputNota2" name="inputNota2">
                        <input class="form-control" id="inputNota3" name="inputNota3">
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index5.php">Voltar</a></button>
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
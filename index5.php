<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio5.php" method="POST">
                
                    <div class="form-group">
                        <label for="inputSalarioAtual">Informe o salário</label>
                        <input class="form-control" id="inputSalarioAtual" name="inputSalarioAtual" placeholder="00000.00">

                        <label for="inputPercentual">Informe percentual de reajuste</label>
                        <input class="form-control" id="inputPercentual" name="inputPercentual" placeholder="99 % = 0.99">
                    </div>
                     
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index4.php">Voltar</a></button>
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

<script type="text/javascript" src="js/index5.js"></script>

</html>
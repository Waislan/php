<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio7.php" method="POST">

                    <div class="form-group">
                        <label for="inputHorasTrabalhadas">Informe a quantidade de horas trabalhadas</label>
                        <input class="form-control" id="inputHorasTrabalhadas" name="inputHorasTrabalhadas">

                        <label for="inputValorHora">Informe o valor (R$) da hora de trabalho</label>
                        <input class="form-control" id="inputValorHora" name="inputValorHora" placeholder="00.00">
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index6.php">Voltar</a></button>
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

<script type="text/javascript" src="js/index7.js"></script>

</html>
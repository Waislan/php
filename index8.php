<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio8.php" method="POST">
                    <div class="form-group">
                        <label for="inputSalarioFixo">Informe o salário fixo do vendedor</label>
                        <input class="form-control" id="inputSalarioFixo" name="inputSalarioFixo">

                        <label for="inputValorVendas">Informe o valor das vendas efetuadas pelo vendedor</label>
                        <input class="form-control" id="inputValorVendas" name="inputValorVendas" placeholder="0000.00">
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index7.php">Voltar</a></button>
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

<script type="text/javascript" src="js/index8.js"></script>

</html>
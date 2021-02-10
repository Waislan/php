<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio9.php" method="POST">
                    <div class="form-group">
                        <label for="inputQuantidadeCombustivel">Informe a quantidade de litros de combustível vendidos</label>
                        <input class="form-control" id="inputQuantidadeCombustivel" name="inputQuantidadeCombustivel" placeholder="0000.00" required>

                        <label for="inputTipoCombustivel">Informe o tipo de combustível vendido</label>
                        <select class="custom-select" id="selectTipoCombustivel" name="selectTipoCombustivel" required>
                            <option selected></option>
                            <option value="0">Álcool</option>
                            <option value="1">Gasolina</option>
                        </select>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index8.php">Voltar</a></button>
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

<script type="text/javascript" src="js/index9.js"></script>

</html>
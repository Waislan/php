<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio3.php" method="POST">
                    <div class="form-group">
                        <label for="inputPeso">Informe seu peso em quilos</label>
                        <input class="form-control" id="inputPeso" name="inputPeso" placeholder="000.00">

                        <label for="inputAltura">Informe sua altura em metros</label>
                        <input class="form-control" id="inputAltura" name="inputAltura" placeholder="0.00">
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index2.php">Voltar</a></button>
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

<script type="text/javascript" src="js/index3.js"></script>

</html>
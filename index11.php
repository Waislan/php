<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!--Grid row-->
    <div class="row justify-content-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="container my-4 card">

                <form action="php/exercicio11.php" method="POST">
                
                    <div class="row">                
                        <label for="inputNome">Informe o nome</label>
                        <input class="form-control" id="inputNome" name="inputNome" required></input>

                        <label for="inputEmail">Informe o email</label>
                        <input class="custom-select" id="inputEmail" name="inputEmail" placeholder="exemplo@email.com" required></input>

                        <label for="inputCpf">Informe o CPF</label>
                        <input class="custom-select" id="inputCpf" name="inputCpf" placeholder="000.000.000-00" required></input>

                        <label for="inputIdade">Informe a idade</label>
                        <input class="custom-select" id="inputIdade" name="inputIdade" required></input>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3">
                            <button type="button" class="btn btn-primary"><a href="index10.php">Voltar</a></button>
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

<script type="text/javascript" src="js/index11.js"></script>

</html>
<?php
if($_GET){
    session_start();
    if(isset($_GET['error_message2'])){
        $error_message2 = $_GET ['error_message2'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro De Tienda</title>
</head>
<body class="degra">
    <div class="container">
        <div class="row">

          <div class="col-sm-12">
            <div class="jumbotron">
                <center>
                        <h1 class="display-6 titulos">Registro de la Tienda</h1>
                </center>
                <hr class="my-4">
                <form action="guardarDatos.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre de la tienda:</label>
                      <input type="text" class="form-control" name="txtnombre" 
                      placeholder="Ingrese el nombre de la tienda" required>
                    </div>

                    <div class="form-group">
                      <label for="formGroupExampleInput2">direccion:</label>
                      <input type="text" class="form-control" name="txtdireccion" 
                      placeholder="Ingrese la direccion de la tienda" required>
                    </div>

                    <div class="form-group">
                      <label for="formGroupExampleInput2">Usuario:</label>
                      <input type="text" class="form-control" name="username" 
                      placeholder="Username" required>
                    </div>
                    
                    <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput2">Contraseña:</label>
                                <input type="password" class="form-control" name="txtpassword" 
                                placeholder="Ingrese su contraseña" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput2">Repita su contraseña:</label>
                                <input type="password" class="form-control" name="txtpassword2" 
                                placeholder="Repita su contraseña" required>
                            </div>
                    </div>
                    <center>
                            <button type="submit" class="btn btn-primary">Guardar Datos</button>
                            <br>
                            <?php
                            if(isset($error_message2)){
                                echo $error_message2;
                            }
                            ?>
                    </center>
                  </form>

            </div>
          </div>
        </div>
    </div> 
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
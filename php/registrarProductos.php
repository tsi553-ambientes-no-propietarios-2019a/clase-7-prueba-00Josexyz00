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
    <title>Registro de Productos</title>
</head>
<body class="degra">
    <div class="container">
        <div class="row">

          <div class="col-sm-12">
            <div class="jumbotron">
                <center>
                        <h1 class="display-6 titulos">Nuevo Producto</h1>
                </center>
                <hr class="my-4">
                <form action="guardarProducto.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="formGroupExampleInput">Código:</label>
                      <input type="text" class="form-control" name="txtcodigo" 
                      placeholder="Ingrese sus dos nombres" required>
                    </div>

                    <div class="form-group">
                      <label for="formGroupExampleInput2">Nombre:</label>
                      <input type="text" class="form-control" name="txtnombre" 
                      placeholder="Ingrese sus dos apellidos" required>
                    </div>

                    <div class="form-group">
                            <label for="formGroupExampleInput3">Tipo:</label>
                                <select class="custom-select form-control" id="inputGroupSelect01" name="txttipo_producto" required>
                                    <option value="">Seleccione</option>
                                    <option value="Alimentos">Alimento</option>
                                    <option value="vestimenta">vestimenta</option>
                                    <option value="salud">salud</option>
                                </select>
                        
                    </div>


                    <div class="form-group">
                      <label for="formGroupExampleInput2">Cantidad:</label>
                      <input type="text" class="form-control" name="numbercantidad" 
                      placeholder="Ingrese la cantidad" required>
                    </div>

                    <div class="form-group">
                      <label for="formGroupExampleInput2">Precio:</label>
                      <input type="text" class="form-control" name="numberprecio" 
                      placeholder="Ingrese el precio" required>
                    </div>


                    <br>
                    <center>
                            <button type="submit" class="btn btn-primary">Registrar</button>
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
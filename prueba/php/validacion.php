<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Datos nuevo usuario</title>
</head>
<body>
<B></B>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <center>
                        <h3 class="display-5 titulos">Nuevo usuario registrado</h3>
                        </center>
                                <?php
                                session_start();
                                $nombres=$_SESSION['nombres'];
                                $apellidos=$_SESSION['direccion'];
                                $username=$_SESSION['username'];
                                $password=$_SESSION['password'];
                                
                                echo "<p>";          
                                echo "<B>Nombres: </B>";
                                echo $nombres;
                                echo "<br/> <B>Direccion: </B>";
                                echo $direccion;
                                echo "<br/> <B>Nombre de Usuario: </B>";
                                echo $username;
                                echo "<br/> <B>Contraseña: </B>";
                                echo $password;
                                ?>
                            <center>
                                <a href="registrarUsuarios.php"><button type="submit" class="btn btn-success">Nuevo usuario</button></a>
                                <a href="cerrarSesion.php"><button type="submit" class="btn btn-danger">Cerrar Sesion</button></a>
                            </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

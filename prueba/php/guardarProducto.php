<?php
     $conn = new mysqli('localhost','root','','pruebab1');
                                $codigo=$_POST['txtcodigo'];
                                $nombre=$_POST['txtnombre'];
                                $tipo_producto=$_POST['tipo_producto'];
                                $cantidad=$_POST['cantidad'];
                                $precio=$_POST['precio'];


                                $_SESSION['codigo']=$codigo;
                                $_SESSION['nombre']=$nombre;
                                $_SESSION['tipo_producto']=$tipo_producto;
                                $_SESSION['cantidad']=$cantidad;
                                $_SESSION['precio']=$precio;



    $sql_insert = "INSERT INTO producto (codigo,nombre, tipo_producto, cantidad, precio) VALUES ('$codigo','$nombre', '$tipo_producto', '$cantidad', '$precio')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: registrarProductos.php?error_message2=Ocurrio un error: ' . $conn->error);
        exit;
    }
?>
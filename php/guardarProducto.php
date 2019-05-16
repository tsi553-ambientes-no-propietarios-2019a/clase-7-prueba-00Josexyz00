<?php
     $conn = new mysqli('localhost','root','','pruebab1');
                                $codigo=$_POST['txtcodigo'];
                                $nombre=$_POST['txtnombre'];
                                $tipo_producto=$_POST['txttipo_producto'];
                                $cantidad=$_POST['numbercantidad'];
                                $precio=$_POST['numberprecio'];


                                $_SESSION['codigo']=$codigo;
                                $_SESSION['nombre']=$nombre;
                                $_SESSION['tipo_producto']=$tipo_producto;
                                $_SESSION['cantidad']=$cantidad;
                                $_SESSION['precio']=$precio;



    $sql_insert = "INSERT INTO producto (codigo,nombre, tipo_producto, cantidad,precio) VALUES ('$codigo','$nombre', '$tipo_producto', '$cantidad', '$precio')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: tabla.php?error_message2=Ocurrio un error: ' . $conn->error);
        exit;
   }else{
   header('Location: tabla.php?error_message2=Ingrese todos los datos');
   exit;
   }
?>
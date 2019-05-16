<?php
if(isset($_POST['txtpassword']) && isset($_POST['txtpassword2'])){
    session_start();
    if($_POST['txtpassword'] == $_POST['txtpassword2']){
     $conn = new mysqli('localhost','root','','pruebab1');
                                $nombres=$_POST['txtnombre'];
                                $direccion=$_POST['txtdireccion'];
                                $username=$_POST['username'];
                                $password=$_POST['txtpassword'];


                                $_SESSION['nombres']=$nombres;
                                $_SESSION['direccion']=$direcion;
                                $_SESSION['username']=$username;
                                $_SESSION['password']=$password;


    $sql_insert = "INSERT INTO tienda (nombres, direccion, username, password) VALUES ('$nombres','$direccion', '$username', MD5('$password'))";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: index.php?error_message2=Ocurrio un error: ' . $conn->error);
        exit;
    }else{
       header('Location: validacion.php');
    }
   }else{
   header('Location: registrarUsuarios.php?error_message2=Las contraseñas no coinciden por favor intentelo de nuevo');
   exit;
   }
}
?>
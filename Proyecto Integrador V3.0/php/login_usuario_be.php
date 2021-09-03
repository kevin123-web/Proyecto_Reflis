<?php

include'conexion.php';
 $email = $_POST['email'];
 $contrasena = $_POST['contrasena'];


 $validar_login = mysqli_query($conexion,"SELECT*FROM usuarios WHERE email='$email'and contrasena='$contrasena' ");

 if(mysqli_num_rows($validar_login)>0){
     header("location:../index.php");
     exit;
     
 }else{
     echo '
    <script>
        alert("usuario no existe");
        window.location="../login.php";
    </script>
    ';
    exit; 
 }

?>
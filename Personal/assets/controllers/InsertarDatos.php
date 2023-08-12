<?php
    include("Conexion.php");
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Contrasena = $_POST['Contrasena'];

    $Datos="INSERT INTO Tab_Registro(Nombre, Apellido, CorreoElectronico, Contrasena) VALUES('$Nombre', '$Apellido', '$CorreoElectronico', '$Contrasena')";
    


    $Ejecutar = mysqli_query($Conexion,$Datos);
    if($Ejecutar){
        echo 
        '<script>
            alert("Usuario almacenado exitosamente");
            window.location = "../../views/Login_Register.html";
        </script>';
    }else{
        echo 
        '<script>
            alert("Intentelo nuevamente,Usuario no almacenado...");
            window.location = "../../views/Login_Register.html";
        </script>';   
    }



    
?>
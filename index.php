<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles.css">
    
</head>
<body>


<div class="back_Form">
    
<div class="RegisterForm" id="RLF">

    <h3 class="RH3">¿No tenes cuenta? <br> <br>
                    Unite a nosotros!!</h3> <br>

  <input type="submit" value="Registrate" class="Botton1" id="BR1">

</div>

<div class="Login" id="RLF">

     <h3 class="LH3">Si ya tenes cuenta <br> <br>
                     Unite a nosotros</h3> <br>
     

    <input type="submit" value="Ingresar" class="Botton1" id="BR2">

</div>

</div>

<div class="formR">

    <form action="guardar" method="POST"> <br>
     
    <h3>Ingresa tus datos</h3>

    <input type="text" placeholder="Name"> <br>
    <input type="text" placeholder="Surname"> <br>
    <input type="password" placeholder="Password"> <br>
    <input type="email" placeholder="Email"> <br>
    <input type="submit" value="Registrate" id="ButtomRegister" class="Botton2"> <br>

    </form>

</div>

<div class="formL">

    <form action=""> <br>
        <h3>Logueate</h3>

    <input type="email" placeholder="Email"> <br>
    <input type="password" placeholder="Password"> <br>
    <input type="submit" value="Ingresa" id="ButtomLogin" class="Botton2"> <br>


</form>
</div>

</body>


<?php

function conect(){

$server="localhost";
$user="pepe";
$password="admin123";
$db="prueba";

$mysqli= mysqli_connect($server,$user,$password,$db);

echo "conectado a prueba";


}

conect();


if(isset($_POST["Register"])){
    $Name=$_POST["Name"];
    $Surname=$_POST["Surname"];
    $password=$_POST["Password"];
    $Email=$_POST["Email"];

    $consulta="INSERT INTO datos VALUES (['$Name'],['$Surname'],['Password'],['Email'])";


    $resultado= mysqli_query($mysqli,$consulta);


          




$insertarDatos= "INSERT INTO datos VALUES($Name,$Surname,$password,$Email)";

$ejectarInsertar=mysqli_query($mysqli,$insertarDatos);
}

?>




</html>
<script src="Java.js"></script>
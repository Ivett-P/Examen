<?php 
include("conexion.php");
$id = $_GET['id'];

$con = conectar();
$sql = "CALL Eliminar($id)";
if(($result = mysqli_query($con,$sql)) == false){
    die(mysqli_error($con));
}
header("location:listado.php");
?>
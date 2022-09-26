<?php
function conectar(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "FNS";

    //CONEXION
    $conn = mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die ("Error al conectar a base de datos: " . mysqli_connect_error());
}else{
    echo "Conexion exitosa";

} 
return $conn;   
}

?>



<?php 

$metodo = $_SERVER["REQUEST_METHOD"];
if($metodo != "POST"){
    echo "Metodo no encontrado";
    http_response_code(405);
    exit;
}

if(isset($_POST["id"])){
    echo $_POST["id"];
}

echo var_dump($_POST);

 ?>




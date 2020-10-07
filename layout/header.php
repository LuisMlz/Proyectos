<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($imports)){
            foreach($imports["js"] as $jsFile){
                echo"<script src='js/".$jsFile."'></script>";
            }
            foreach($imports["css"] as $cssFile){
                echo"<link rel='stylesheet' href='css/".$cssFile."'>";
            }

        }
    ?>
</head>
<body>
<a href="index.php">Inicio</a> <br><br> 
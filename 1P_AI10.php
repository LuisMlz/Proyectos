

<?php 

$imports = ['js' => ["site.js"], 'css' => ["site.css"]];
include('layout/header.php'); ?>
<a href="1P_AI10_2.php">Ir a la pagina 2</a> <br><br> 

<form action="1P_AI10_peticion.php" method="post">
<input type="text" name="idProducto" value="1"><br>
<button type="button">Enviar</button>
<button name="boton1" value="btn1">Boton 1</button>
<button name="boton2" value="btn2">Boton 2</button>
<button name="boton3" value="btn3">Boton 3</button>
</form>

<!-- <button onclick="saludar()">Saludar</button> -->

<?php include('layout/footer.php'); ?>




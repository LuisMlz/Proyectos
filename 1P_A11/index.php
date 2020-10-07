<a href="../index.php">Regresar al inicio </a>
<br><br>
<?php   

#ENTRADA
#DETECTAR OPERACION
#EJECUTAR OPERACION Y OBTENER RESULTADO
#IMPRESION
include("Controllers/CalculadoraController.php");
$calculadora = new CalculadoraController();
$calculadora->parametros();
$calculadora->operaciones();
?> <br><br>
<form method="post">
<label><?php echo $calculadora->pantalla ?></label>
<input type="hidden" name="pantalla" value="<?php echo $calculadora->pantalla ?>"> =
<input type="number" name="resultado"value="<?php echo $calculadora->resultado ?>"> 
<br><br>
<input type="number" name="entrada"><br>
<button name="accion" value="suma">+</button>
<button name="accion" value="resta">-</button>
<button name="accion" value="multiplica">*</button>
<button name="accion" value="division">/</button>
</form>
<form method="post">
<button name="accion" value="reset">Reset</button>
</form>




<!-- CONVERSOR -->
<?php

include("Controllers/ConversorController.php");
$conversor = new ConversorController();
$conversor->parametros();
$conversor->operaciones();
?> <br><br>

<form method="post">
<label> Unidades: </label>
  <select id="cmbMake" name="accion">
     <option value="0">Selecciona Unidad</option>
     <option value="1">centímetro</option>
     <option value="2">metro</option>
     <option value="3">pulgada</option>
     <option value="4">yarda</option>
     <option value="5">gramo</option>
     <option value="6">kilogramo</option>
     <option value="7">onza</option>
     <option value="8">litros</option>
     <option value="9">mililitros</option>
     <option value="10">metro cúbico</option>
</select>
Origen: <input type="number" step="any" name="origen" value="<?php echo $conversor->origen ?>"><strong><label><?php echo $conversor->unidadOrigen ?></label></strong>
<input type="hidden" name="unidadOrigen" value="<?php echo $conversor->unidadOrigen ?>"><br>
<label> Unidades: </label>
  <select id="cmbMake" name="accion2">
     <option value="0">Selecciona Unidad</option>
     <option value="1">centímetro</option>
     <option value="2">metro</option>
     <option value="3">pulgada</option>
     <option value="4">yarda</option>
     <option value="5">gramo</option>
     <option value="6">kilogramo</option>
     <option value="7">onza</option>
     <option value="8">litros</option>
     <option value="9">mililitros</option>
     <option value="10">metro cúbico</option>
</select>
Destino: <input type="number" step="any" name="destino" value="<?php echo $conversor->destino ?>"><strong><label><?php echo $conversor->unidadDestino ?></label></strong>
<input type="hidden" name="unidadDestino" value="<?php echo $conversor->unidadDestino ?>"><br>
<button type="submit" value="accion">Convertir</button>
<label><?php echo $conversor->mensaje ?></label>
<input type="hidden" name="mensaje" value="<?php echo $conversor->mensaje ?>">
</form>
<form method="post">
<button name="accion" value="reset">Reset</button>
</form> 
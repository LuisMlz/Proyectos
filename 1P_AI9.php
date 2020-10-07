<a href="index.php">Inicio</a> <br><br> 

<?php


include_once('1P_AI9_Controlador.php'); ?>

<table border="1">
    <thead>
        <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>EDAD</th>
        </tr>
   </thead>
   <tbody><?php 

            foreach($mUsuario as $row){
                echo "<tr>
                <td>$row->id</td>
                <td>$row->nombre</td>
                <td>$row->edad</td>
                </tr>";
            }

        ?>
</tbody>

</table>





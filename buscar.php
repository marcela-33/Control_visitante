<?php
   require'conexion2.php';
   if(isset($_GET['enviar'])){
        $busqueda=$_GET['busqueda'];

        $consultar=$conexion->query("SELECT * FROM visitantes WHERE documento_visitante LIKE '%$busqueda%' OR nombre_visitante LIKE '%$busqueda%' OR apellido_visitante LIKE '%$busqueda%' OR
        a_quien_visita LIKE '%$busqueda%' OR motivo_visita LIKE '%$busqueda%' OR telefono_contacto LIKE '%$busqueda%'");
        $rows=mysqli_num_rows($consultar);
        if($rows>0){
           while ($row=$consultar->fetch_array()){
            
 ?>
<tr>
    <td><?php echo $row['fecha_ingreso']?></td>
    <td><?php echo $row['documento_visitante']?></td>
    <td><?php echo $row['nombre_visitante']?></td>
    <td><?php echo $row['apellido_visitante']?></td>
    <td><?php echo $row['a_quien_visita']?></td>
    <td><?php echo $row['motivo_visita']?></td>
    <td><?php echo $row['ingresa_equipo']?></td>
    <td><?php echo $row['telefono_contacto']?></td>
    <td><?php echo $row['Fecha_salida']?></td>
</tr>
<?php
           } 
    }else{
      echo'
      <tr>
        <td colspan = "9"><center>Registros no Existen</center></td>
      </tr>';
    }
  }else{
    $query=mysqli_query($conexion, "SELECT * FROM `visitantes`") or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $fetch['fecha_ingreso']?></td>
    <td><?php echo $fetch['documento_visitante']?></td>
    <td><?php echo $fetch['nombre_visitante']?></td>
    <td><?php echo $fetch['apellido_visitante']?></td>
    <td><?php echo $fetch['a_quien_visita']?></td>
    <td><?php echo $fetch['motivo_visita']?></td>
    <td><?php echo $fetch['ingresa_equipo']?></td>
    <td><?php echo $fetch['telefono_contacto']?></td>
    <td><?php echo $fetch['Fecha_salida']?></td>
</tr>
<?php
    }
  }
?>
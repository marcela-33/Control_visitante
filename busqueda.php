<?php
  require'conexion2.php';
  if(ISSET($_POST['search'])){
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($conexion, "SELECT * FROM `visitantes` WHERE `fecha_ingreso` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){
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
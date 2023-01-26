<?php
$conexion = mysqli_connect();

if($conexion){
    $consulta = 'SELECT * FROM productos';
    $datos = $conexion -> query($consulta);
    if($datos->num_rows > 0){
        while($fila = $datos->fetch_assoc()){

        $nombreProducto = $fila['NOMBRE'];
        $codigo = $fila['CODIGO'];
        $total = $fila['TOTAL'];
?>
        <tr >
            <td style="width: 250px"><?= $codigo ?></td>
            <td style="width: 250px"><?= $nombreProducto ?></td>
            <td style="width: 250px"><?= $total ?></td>
        </tr>
<?php
       }
  }
}
?>
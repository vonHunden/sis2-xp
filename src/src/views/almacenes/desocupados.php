<h2>Almacenes Desocupados</h2>
<table border="2">
    <thread>
        <tr style="border: 1px solid #000">
            <td>ID</td>
            <td>NOMBRE</td>
            <td>EXISTENCIAS</td>
            <td>CAPACIDAD</td>
        </tr>
    </thread>
    <tbody>
        <tr style="border: 1px solid #000">
        <?php foreach($data['almacenes'] as $row) {?>
            <td><?php echo $row->idAlmacen; ?></td>
            <td><?php echo $row->nombre_almacen; ?></td>
            <td><?php echo $row->existencias; ?></td>
            <td><?php echo $row->capacidad; ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
        
<table border="1">
    <tr>
        <th>Id</th>
        <th>nombre</th>
        <th>tipo</th>
        <th>nacionalidad</th>
        <th>precio</th>
    </tr>

    <?php foreach ($dou as $xd) { ?>
        <tr>
            <td><?php echo $xd['id_arma']?></td>
            <td><?php echo $xd['tipo_arma']?></td>
            <td><?php echo $xd['name_arma']?></td>
            <td><?php echo $xd['nacioanlidad']?></td>
            <td><?php echo $xd['precio_arma']?></td>
        </tr>
    <?php } ?>

</table>

        <?php for($i=0;$i< count($place_orders['shipper_name']); $i++) {?>
        <tr>
            <td><?= $place_orders['shipper_name'][$i] ?></td>
            <td> <?= $place_orders['shipper_phone'][$i] ?> </td>
            <td> <?= $place_orders['reciever_name'][$i] ?> </td>
            <td> <?= $place_orders['description'][$i] ?> </td>
            <td><?= $place_orders['instruction'][$i] ?> </td>
            <td><?= $place_orders['no_of_pieces'][$i] ?> </td>
            <td> <?= $place_orders['amount'][$i] ?> </td>
        </tr>
        <?php } ?>

        <?php echo $i; ?>

    
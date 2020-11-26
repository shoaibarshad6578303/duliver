
        <?php for($i=0;$i< count($place_orders['shipper_name']); $i++) {?>
        <tr>
        <td> <input type="checkbox" id="orders" name="checkbox[]" value="<?php echo $i ?>"> </td>
            <td> <input   name="shipper_name[]" value="<?= $place_orders['shipper_name'][$i] ?>"  ></td>
            <td> <input  name="shipper_phone[]" value="<?= $place_orders['shipper_phone'][$i] ?>"  >  </td>
            <td> <input   name="reciever_name[]" value="<?= $place_orders['reciever_name'][$i] ?>"  >  </td>
            <td> <input   name="description[]" value="<?= $place_orders['description'][$i] ?>"  >  </td>
            <td> <input   name="instruction[]" value="<?= $place_orders['instruction'][$i] ?>"  >  </td>
            <td> <input   name="no_of_piece[]" value="<?= $place_orders['no_of_pieces'][$i] ?>"  >  </td>
            <td> <input   name="cod_amount[]" value="<?= $place_orders['amount'][$i] ?>" > </td>
        </tr>
        <?php } ?>

       

    
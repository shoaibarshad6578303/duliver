<?php foreach($orders as $order) { ?>

<tr>
<td><?php echo $order->tracking_number; ?></td>
<td><?php echo $order->shipper_ref; ?></td>
<td><?php echo $order->shipper_name; ?></td>
<td>null</td>
<td>null</td>
<td><?php echo $order->reciever_name; ?></td>
<td>null</td>
<td>null</td>
<td>
<button type="button" data-update="<?php echo $order->id ?>" id="update_status" class="btn btn-primary" >
  Update Status
</button>
</td>
</tr>

<?php } ?>



<?php echo form_open_multipart('sales/create'); ?>
<table>
<tr><td>Product ID</td><td><?php echo form_input('product_id'); ?></td></tr>
<tr><td>Name</td><td><?php echo form_input('name'); ?></td></tr>
<tr><td>Price</td><td><?php echo form_input('price'); ?></td></tr>
<tr><td>Stock</td><td><?php echo form_input('Stock'); ?></td></tr>
<tr><td colspan=2> <?php echo form_submit('submit','Save');?> <?php echo anchor('product','Back');?></td></tr>
</table>
<?php echo 
form_close();
?>
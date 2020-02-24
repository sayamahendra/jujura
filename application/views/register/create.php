<?php echo form_open_multipart('register/index'); ?>
<table>
<tr><td>Username</td><td><?php echo form_input('user_name'); ?></td></tr>
<tr><td>Email</td><td><?php echo form_input('user_email'); ?></td></tr>
<tr><td colspan=2> <?php echo form_submit('submit','Save');?> <?php echo anchor('product','Back');?></td></tr>
</table>
<?php echo 
form_close();
?>
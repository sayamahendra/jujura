<!-- <font color="orange"> -->
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo '<pre>'; echo var_dump($register); echo '</pre>';?>
    <a href="http://localhost/jujura/index.php/register/create">+ Create Data</a>
</body>
</html>
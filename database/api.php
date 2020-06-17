<?php include 'dischi.php' ?>
<?php
header('Content-Type: application/json');
echo json_encode($database);
?>

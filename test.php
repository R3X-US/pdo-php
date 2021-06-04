<?php
$stmt = $bgl->prepare("SELECT * FROM x"); #x should be name of the table
$stmt->execute(); 
$data = $stmt->fetch();
echo($data);

?>

<?php
require('config/config.php');
$sql='delete from tblperfume where id='.intval($_GET['id']);
$result=mysqli_query($connect,$sql);
header('location:http://localhost:81/ci1/index.php/m/t');
?>

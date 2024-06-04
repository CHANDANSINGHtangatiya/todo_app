<?php

require_once("conn.php");
$id=$_GET['id'];

$result="DELETE FROM data WHERE id='$id'";

mysqli_query($conn,$result);



 header("location:index.php");
 exit();

?>
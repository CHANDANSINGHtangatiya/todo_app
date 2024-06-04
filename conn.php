<?php

$server="localhost";
$user="root";
$password="";
$dbname="todo";


$conn=mysqli_connect($server,$user,$password,$dbname);

if($conn){

    $qurey="CREATE TABLE IF NOT EXISTS data(
        id int(11) primary key NOT NULL auto_increment,
        task varchar(255) NOT NULL
    )";

    mysqli_query($conn,$qurey);

}

else{
    die("connection failed".mysqli_connect_error());
}

?>
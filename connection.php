<?php
$servername='localhost';
$username='root';
$password='';
$database='curd';

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "not";
}else{
   echo "yes";
} 
?>

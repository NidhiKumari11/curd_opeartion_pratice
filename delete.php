<?php
$servername='localhost';
$username='root';
$password='';
$database='curd';

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "not";
}else{
    //echo "nfbnb";
    $id = $_GET['id'];
    $sqlquerry= "DELETE FROM `users` WHERE id = '$id'";

     $result= mysqli_query($conn,$sqlquerry);
    if($result){
        header("Location: index.php");
       // echo "delete successfully";

    }else{
        echo "not" . mysqli_error($conn);
    }

} 
?>


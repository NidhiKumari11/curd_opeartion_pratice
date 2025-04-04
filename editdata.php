<?php
$servername='localhost';
$username='root';
$password='';
$database='curd';

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "not";
}else{
    $title= $_POST['title'];
    $des= $_POST['desc'];
    $id = $_GET['id'];
 
    $sqlquerry= "UPDATE `users` SET `title` = '$title', `des` = '$des' WHERE `id` = '$id'";

     $result= mysqli_query($conn,$sqlquerry);
    if($result){
        header("Location: index.php");
       // echo "inserted ";

    }else{
        echo "not" . mysqli_error($conn);
    }

} 
?>


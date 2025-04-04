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
    echo "yes";
    $sqlquerry= "INSERT INTO `users` (`title`, `des`, `date`) VALUES ( '$title', '$des' , CURRENT_TIMESTAMP)";

     $result= mysqli_query($conn,$sqlquerry);
    if($result){
        header("Location: index.php");
        //echo "inserted ";

    }else{
        echo "not" . mysqli_error($conn);
    }

} 
?>


UPDATE `users` SET `des` = 'developer' WHERE `users`.`id` = 1;

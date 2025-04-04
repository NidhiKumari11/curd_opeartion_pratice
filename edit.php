<?php
$servername='localhost';
$username='root';
$password='';
$database='curd';

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "not";
}else{
    $id = $_GET['id'];
    $sqlquerry= "select * from `users` where id='$id'";
    $result= mysqli_query($conn,$sqlquerry);
   if($result){
        $row = mysqli_fetch_assoc($result);

        if ($row) {  // Check if a row was found
          //  echo $row["id"];
        } 
    }else{
        echo "not" . mysqli_error($conn);
    }

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Operations</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Data Table CSS -->
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="container mt-4" >
    <h3> Edit a Note to iNotes </h3>
    
    <form action="editdata.php?id=<?php echo $row['id']; ?>" method="POST" >
        <div class="mb-3">
            <label for="title" class="form-label"> Title</label>
            <input type="title" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="<?php echo $row['title'];?>">
        
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Note Description </label>
            <textarea type="text"  name="desc" class="form-control" id="desc" rows="5" cols="5" ><?php echo $row['des'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit Note</button>
    </form>
</div>
   
        <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
           <!-- Script JS -->
    <script src="./js/script.js"></script>

</body>
</html>
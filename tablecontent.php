<?php
$servername='localhost';
$username='root';
$password='';
$database='curd';

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "database Connection failure!!!";
}else{
  
} 
?>
<style>
.wrapper {
  margin-top: 5vh;
}

.dataTables_filter {
  float: right;
}

.table-hover > tbody > tr:hover {
  background-color: #ccffff;
}

@media only screen and (min-width: 768px) {
  .table {
    table-layout: fixed;
    max-width: 100% !important;
  }
}

thead {
  background: #ddd;
}

.table td:nth-child(2) {
  overflow: hidden;
  text-overflow: ellipsis;
}

.highlight {
  background: #ffff99;
}

@media only screen and (max-width: 767px) {
  /* Force table to not be like tables anymore */
  table,
thead,
tbody,
th,
td,
tr {
    display: block;
  }

  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr,
tfoot tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }

  td {
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 50% !important;
  }

  td:before {
    /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
  }

  .table td:nth-child(1) {
    background: #ccc;
    height: 100%;
    top: 0;
    left: 0;
    font-weight: bold;
  }

  /*
  Label the data
  */
  td:nth-of-type(1):before {
    content: "Name";
  }

  td:nth-of-type(2):before {
    content: "Position";
  }

  td:nth-of-type(3):before {
    content: "Office";
  }

  td:nth-of-type(4):before {
    content: "Age";
  }

  td:nth-of-type(5):before {
    content: "Start date";
  }

  td:nth-of-type(6):before {
    content: "Salary";
  }

  .dataTables_length {
    display: none;
  }
}
</style>


<div class="container mt-4">
<table id="example" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>DATE</th>
                <th>EDIT </th>
                <th> Delete</th>
               
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["des"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                <form action='edit.php?id=<?php echo $row["id"]; ?>' method="POST">
                    <td>
                        <button type="submit" class="btn btn-success" >Edit</button>
                    </td>
                </form>
               
                <form action='delete.php?id=<?php echo $row["id"]; ?>' method="POST">
                    <td>
                         <button type="submit" class="btn btn-danger">Delete</button>
                     </td>
                </form>
                
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }
        ?>
           
        </tbody>
    </table>

</div>

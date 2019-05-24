<?php
     require ('../layouts/header.php');
     require('../dbconnection/connection.php');
?>

<?php
  $sql="SELECT * FROM users";
  $result=mysqli_query($connection,$sql);
?>
  <style type="text/css">
    body {
     background-color:rgba(201, 76, 76, 0.3);
    }
    .table{color:black;}
</style>

    <div class="container">
	<h1 style="color:black;font-weight:bold;font-size: 80px;font-family: cursive; ">USERS</h1>
	<table class="table table-">
    <thead>
      <tr>
        <th>users</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
      <tbody>
<?php
    if(mysqli_num_rows($result) > 0){

    	while($row=mysqli_fetch_assoc($result)){
?>
      <tr>
        <td><?php echo $row["name"] ?></td>
        <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">delete</a></td>
      </tr>
<?php
    	}
    } 
?>
</tbody>
</table>
</div>
<?php
    require('../layouts/footer.php');
?>
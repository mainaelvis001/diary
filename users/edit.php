<?php
    require('../layouts/header.php');
    require('../dbconnection/connection.php');
?>
<?php
 if(isset($_POST["name"])&& isset($_POST["pwd"])){
        $name=$_POST["name"];
       $pwd=$_POST["pwd"];
       $id=$_GET['id'];

      $sql="UPDATE users SET name='$name', password='$pwd' WHERE id='$id'";

      if(mysqli_query($connection,$sql)){
        echo "user updated successfully";
      } else{
        echo "Error: ". $sql . "<br>" .mysqli_error($connection);
      }
      //mysqli_close($connection);
    }

      
?>
<style>
body {
  background-color:rgba(201, 76, 76, 0.3);
}
</style>

<div class="container">

    	<h1 style="color:black;font-size:80px;font-weight: bold;font-family: cursive;">user update:</h1>
      
    <form  method="POST" action="">
            <div class="form-group">
              <label style="color:black;" for="name">name:</label>
              <input type="name" class="form-control" name="name">
            </div>
            <div class="form-group">
              <label style="color:black;" for="password">password:</label>
              <input type="password" class="form-control" name="pwd">
            </div>
        <button type="submit" class="btn btn-primary">update user</button>
    </form>
</div>
<?php
    require('../layouts/footer.php');

?>
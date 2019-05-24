<?php
    require('layouts/header.php');
    require('dbconnection/connection.php');

    if(isset($_POST['name'])&& isset($_POST['pwd'])){

    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    
   $sql="INSERT INTO users(name, password)
          VALUES('$name' ,'$pwd')";
    if(mysqli_query($connection,$sql)){
        echo "user signed up successfully";
      } else{
        echo "Error: ". $sql . "<br>" .mysqli_error($connection);
      }
      mysqli_close($connection);
    }
?>
<style>
body {
  background-color: rgba(201, 76, 76, 0.3);
}
</style>
<h1 style="font-size: 80px;font-weight: bold;text-align: center;font-family: cursive;">Sign up:</h1>
<div class="container">
    <form method="POST" action="">
      <div class="form-group">
        <label for="name">Enter name:</label>
        <input type="name" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pwd">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
    require('layouts/footer.php');
?>


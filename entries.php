<?php
    require('layouts/header.php');
    require('dbconnection/connection.php');

    if(isset($_POST['user_id'])&& isset($_POST['date'])&& isset($_POST['experience'])&& isset($_GET['user_id'])){
    	$user_id=$_POST['user_id'];
    	$date=$_POST['date'];
    	$experience=$_POST['experience'];
       $user_id=$_GET['user_id'];

    	$sql="INSERT INTO entries(user_id, date, experience)
    	       VALUES('$user_id', '$date', '$experience')";
    	        if(mysqli_query($connection,$sql)){
        echo "diary updated successfully";
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

<h1 style="font-size:80px;font-weight: bold;font-family: cursive;text-align: center;background-image: url(img/img1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-size: cover;padding:10%;color:black;">MY DIARY</h1>
		
		
		
<div class="container">
  <h3 style="font-weight: bold;font-family: cursive;">Dear diary;</h3>
    <form  method="POST" action="">
        <div class="form-group">
         <label for="comment"></label>
          <textarea class="form-control" rows="15" name="comment"></textarea>
        </div>

       <button type="button" class="btn btn-secondary">submit diary</button>
    </form>
</div>
<?php
    require('layouts/footer.php');
?>
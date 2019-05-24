<?php
    require('../dbconnection/connection.php');
    $id=$_GET['id'];

   $sql="DELETE FROM users WHERE id='$id'";

  if( mysqli_query($connection,$sql)){
  	echo 'deleted successfully';
  }else {
  	  echo "Error deleting record: " . mysqli_error($connection);
  }

   if( mysqli_query($connection,$sql2)){
    echo 'user deleted successfully';
  }else {
      echo "Error deleting record: " . mysqli_error($connection);
  }


  mysqli_close($connection);
  header('Location:users_table.php');
?>
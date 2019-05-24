<?php
    require('layouts/header.php');
    require('dbconnection/connection.php');
?>


<style type="text/css">
	.h1{
		font-size:120px;
		text-align: center;
		font-family: cursive;
		padding:20%;
		background-image: url(img/img1.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
		background-size: cover;
	}
	p{
		font-family: cursive;
	}
	.container{
		font-family: cursive;
	}
</style>

<style>
body {
  background-color: rgba(201, 76, 76, 0.3);
}
</style>

<h1 class="h1" style="color:black;font-weight: bold;font-size: 80px;">e-DIARY</h1>

<p>penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel a</p>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2 style="font-family: cursive;font-weight: bold;font-size: 30px;">ABOUT</h2>
			penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel a
		</div>
		<div class="col-md-6">
			<h2 style="font-family: cursive;font-weight: bold;font-weight: 30px;">SERVICES</h2>
			penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel a
		</div>
	</div>
	</div>
   <p>Create your own diary today</p>
	<a href="http://localhost/diary/diary/sign_up.php"><button type="sign up" class="btn btn-primary">sign up</button></a>
   <p>Already a user:</p>
   <a href="http://localhost/diary/diary/login.php"><button type="login" class="btn btn-primary">login</button></a>

	<?php
        require('layouts/footer.php');
	?>
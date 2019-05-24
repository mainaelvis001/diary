<!DOCTYPEhtml5>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
<nav class="nav-bar bg-pink">
      body {
        font-family: "Lato", sans-serif;
      }

      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color:grey;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color:black;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color:pink;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      </style>
      </head>
      <body>

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="http://localhost/diary/diary/home_page.php">home page</a>
        <a href="http://localhost/diary/diary/sign_up.php">sign up</a>
        <a href="http://localhost/diary/diary/login.php">login</a>
        <a href="http://localhost/diary/diary/entries.php">my diary</a>
        <a href="http://localhost/diary/diary/users/users_table.php">all users</a>
      </div>
      <span style="font-size:30px;cursor:pointer; color:black;text-align: center;" onclick="openNav()">&#9776; open</span>

      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>

</nav>


	<title></title>
	
</head>
<body>


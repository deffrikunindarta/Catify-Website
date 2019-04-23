<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 210px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a class="navbar-brand"  style="color:white;font-family: Berlin Sans FB" pxhref="<?= base_url(); ?>Home"><img src="assets/logo.PNG" style="width:26px; height:26px;"> Spotify</a>

  <a href="Home" style = "font-family: Candara; font-size : 16pt">Home</a>
  <a href="Browse" style = "font-family: Candara; font-size : 16pt">Browse</a>
  <a href="YourCollection" style = "font-family: Candara; font-size : 16pt">Your Collection</a>
  <a href="Login" style = "font-family: Candara; font-size : 16pt">Login</a>

  <a href="SignUp" style = "font-family: Candara; font-size : 16pt">signup</a>
</div>

<div class="main">
</div>
   
</body>
</html> 

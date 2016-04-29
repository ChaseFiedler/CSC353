<!DOCTYPE html>
<html>
<head>
<style>
#header {
    background-color:#0099cc;
    color:white;
    text-align:center;
	width:100%;
}
#section {
	background-color:#e6e6e6;
    width:100%;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:#0099cc;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	
    width:100%; 	 
}
body {
	background-color:#0099cc
}
title {
    font-size:60px;
	color:white;
    background-color:#0099cc;   
	text-align: right;   
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0099cc;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

a:hover:not(.active) {
    background-color: #111;
}

.active {
background-color:#4CAF50;
}
</style>
</head>
<body>

<title>Blueprint</title>

<ul>
	<li><a href="index.php">Home</a></li>
  	<li><a href="marketplace.php">Marketplace</a></li>
  	<li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="signIn.php">Sign In</a></li>
    <li><a href="signUp.php">Sign Up</a></li>
    <li><a href="league.php">League Admin</a></li>
</ul>


<div id="section">
<h2><font color=#0099cc>You have been signed out!</font></h2><br />

<?php
	session_start();
	$_SESSION['uuid'] = null;
	$_SESSION['admin'] = null;
?>
</div>



<div id="footer">
2016, Charles Fiedler, Brooks Musangu, Jake Gavin
</div>


</body>
</html>

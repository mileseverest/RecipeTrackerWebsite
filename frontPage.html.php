<?php
	include 'databaseLoad.php';
?>

<!DOCTYPE html>
<html>
<style>
	
a:link, a:visited {
	width: 45%;
	background-color: #4CAF50;
	color: white;
	padding: 65px 15px;
	text-align: center;
	display: inline-block;
	text-decoration: none;
	font-size:32px;
}

a.right
{
	float:right;
}
</style>
<head>
	<title>Recipe Database!</title>
</head>

<body>

<p><a class="right" href="?addRecipe">Add a New Recipe</a></p>
<p><a href="?goToRecipes">Go to your Recipes!</a></p>

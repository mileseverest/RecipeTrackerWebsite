<!DOCTYPE html>
<html>

<head>
	<title>List of Recipes</title>
	<meta http-equiv="content-type" content = "text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="rateStyle.css">

</head>

<body>
	<table align="center">
	<tr>
		<th>Recipe Name</th>
		<th>Rating</th>
		<th>Action</th>
	</tr>
	<?php foreach($recipeName as $recipe): ?>
	<tr>
	<td><?php echo htmlspecialchars($recipe['text'], ENT_QUOTES, 'UTF-8'); ?></td>
	<td>
	<div class="dropdown">
  	<button class="dropbtn">
		<?php echo htmlspecialchars($recipe['rating'], ENT_QUOTES, 'UTF-8');?>
	</button>
  		<div class="dropdown-content">
	<form action='?rate' method="post">
    		<a href="javascript:;" onclick="parentNode.submit();">1</a>
    		<a href="javascript:;" onclick="parentNode.submit();">2</a>
    		<a href="javascript:;" onclick="parentNode.submit();">3</a>
    		<a href="javascript:;" onclick="parentNode.submit();">4</a>
    		<a href="javascript:;" onclick="parentNode.submit();">5</a>
		<input type="hidden" name="id" value="<?php
			echo $recipe['id']; ?>"/>
	</form>
  		</div>

	</td>
	<form action='?deleteRecipe' method="post">
		<input type="hidden" name="id" value="<?php
			echo $recipe['id']; ?>"/>
		<td><input type="submit" value="Delete"/></td></tr>
	</form>
	<?php endforeach; ?>
</table>
	
	<p><a href="?addRecipe">Add a New Recipe</a></p>
	<p><a href="?goHome">Go Home</a><p>
</body>

</html>

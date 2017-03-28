<?php
	$link = mysqli_connect('localhost', 'root', 'Nikki17goopy123');

	if (!$link)
	{
		$error = 'Unable to connect to database server.';
		include 'error.html.php';
		exit();
	}

	if (!mysqli_set_charset($link, 'utf8'))
	{
		$error = 'Unable to set database connection enconding.';
		include 'error.html.php';
		exit();
	}

	if (!mysqli_select_db($link, 'recipeData'))
	{
		$error = 'Unable to locate database';
		include 'error.html.php';
		exit();
	}
	
	$result = mysqli_query($link, 'SELECT id, rating, recipeName FROM recipe');
	
	if (!$result)
	{
		$error = 'Error Fetching Data: ' . mysqli_error($link);
		include 'error.html.php';
		exit();
	}

	while ($row = mysqli_fetch_array($result))
	{
		$recipeName[] = array('rating' => $row['rating'], 'id' => $row['id'], 'text' => $row['recipeName']);
	}

?>

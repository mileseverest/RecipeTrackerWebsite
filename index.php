<?php
	include 'databaseLoad.php';

	if (isset($_GET['addRecipe']))
	{
		include 'form.html.php';
		exit();
	}

	if (isset($_GET['goToRecipes']))
	{
		include 'recipes.html.php';
		exit();
	}
	
	if (isset($_GET['goHome']))
	{
		include 'frontPage.html.php';
		exit();
	}
	
	if (isset($_POST['recipeName']))
	{
		$recipetext = mysqli_real_escape_string($link, $_POST['recipeName']);
		$sql = 'INSERT INTO recipe SET
				recipeName = "'. $recipetext. '",
				recipeDate = CURDATE()';

		if(!mysqli_query($link, $sql))
		{
			$error = 'Error adding recipe: ' . mysqli_error($link);
			include 'error.html.php';
			exit();
		}

		header('Location: ?goToRecipes');
		exit();
	}
	
	if (isset($_GET['deleteRecipe']))
	{
		$id = mysqli_real_escape_string($link, $_POST['id']);
		$sql = "DELETE FROM recipe WHERE id='$id'";
		
		if(!mysqli_query($link, $sql))
		{
			$error = 'Error deleting recipe: ' . mysqli_error($link);
			include 'error.html.php';
			exit();
		}

		header('Location: ?goToRecipes');
		exit();
	}
	
	if (isset($_REQUEST['rate']))// && !empty($_POST['id'])) 
	{
		$rating = mysqli_real_escape_string($link, $_POST['rating']);
		$id = mysqli_real_escape_string($link, $_REQUEST['id']);
		$sql = "UPDATE recipe SET rating = '$rating' WHERE id='$id'";

		if(!mysqli_query($link, $sql))
		{
			$error = 'Error updating rating' . mysqli_error($link);
			include 'error.html.php';
			exit();
		}
		
		header('Location: ?goToRecipes');
		exit();
	}
	
	include 'frontPage.html.php';
?>

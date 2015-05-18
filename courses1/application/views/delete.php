<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deletion Page</title>
	<style>

	h1
	{
		font-size: 48px;
		text-align: center;
	}

	input, button {
    border: 5px solid #c0caad; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
    border-radius: 15px;
}

	</style>
</head>
<body>
	
	<h1>Are you sure you want to delete the following courses?</h1>
	<p>Name: <?php echo $id['name'] ?></p>
	<p>Description: <?php echo $id['description']?></p>
	<form method="post" action="main">
		<input type="hidden" name="action" value= <?php echo $id['id']?>>
		<input type="submit" value="Yes, I want to delete this.">
	</form>
	<a href="/mains"><button>No</button></a>

</body>
</html>
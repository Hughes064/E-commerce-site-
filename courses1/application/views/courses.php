<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<title>Courses</title>
	<style>

	h1 
	{
		text-align: center;
		font-family: 'Oswald', sans-serif;
		color: #654C4F;
		font-size: 48px;

	}

	h2
	{
		font-family: 'Oswald', sans-serif;
		color: #654C4F;
		margin-left: 15px;
	}
	table, th, td

	{
		border: 3px solid #9da9a0;

	}

	table 
	{
		border-collapse: collapse;
		width: 100%;
	}

	th 
	{
		height: 50px;
		text-align: left;
		background-color: lightblue;
		color: white;
	}

	td 
	{
		height: 50px;
		vertical-align: bottom;
		padding: 15px;
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

	label 
	{
		
	color: #654C4F;
	font-size: 18px;
	font-weight: bolder;
	margin-right: 15px;
	margin-left: 15px;
		}
	 button 
	 {
	 	font-size: 14px;
	 	color: #654C4F;
	 }

	</style>


</head>
<body>

	<h1>Welcome to Coding Dojo</h1>
	<h2>Add a new course</h2>
	<form method="post" action="add">
		<label>Name:</label><input type="text" name="name">
		<label>Description:</label><input type="text" name="description">
		<input type="submit" value="Add">
	</form>

	<h2>Courses<h2>
		<table>
			<thead>
				<td>Course Name</td>
				<td>Description</td>
				<td>Date Added</td>
				<td>Actions</td>
			</thead>
			<tbody>
<?php 

			foreach ($registrations as $registration) {
?>
			<tr>
				<td><?php echo $registration['name']?></td>
				<td><?php echo $registration['description']?></td>
				<td><?php echo $registration['created_at']?></td>
				<td>
					<form action = "delete" method="post">
						<input type ="hidden" name= "value"value=<?php echo $registration['id']?>>
						<button value = "remove">remove</button>
					</form>
				</td>
			</tr>

<?php 
}
?>
			</tbody>
		</table>
	
</body>
</html>
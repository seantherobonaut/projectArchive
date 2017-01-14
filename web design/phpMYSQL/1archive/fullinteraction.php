<?php
	//This page allows the reading and inserting of records into an html table to be displayed.
	//error_reporting(0); //This turns on and off error reporting.
	require 'connect.php';
	require 'security.php';

	$records = array();

	//if submit is pressed and has stuff in it
	if(!empty($_POST))
	{
		if(isset($_POST['first_name'], $_POST['last_name'], $_POST['bio']))
		{
			//trimming the whitespace
			$first_name = trim($_POST['first_name']);
			$last_name = trim($_POST['last_name']);
			$bio = trim($_POST['bio']);

			//if users didn't just put a ton of spaces in here...
			if(!empty($first_name) && !empty($last_name) && !empty($bio))
			{
				$insert = $db->prepare("INSERT INTO people (first_name, last_name, bio, created) VALUES (?, ?, ?, NOW())");
				$insert->bind_param('sss', $first_name, $last_name, $bio);

				//?????
				if($insert->execute())
				{
					header('Location: index.php');
					die();
				}
			}
		}
	}

	//fetch records....AFTER they have been inserted up top
	if($results = $db->query("SELECT * FROM people"))
	{
		if($results->num_rows)
		{
			while($row = $results->fetch_object())
			{
				$records[] = $row;
			}
			$results->free();
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>People</title>
	</head>
	<body>
		<h3>People</h3>
		<?php
			//Makes sure there are records before displaying anything.
			if(!count($records))
			{
				echo 'No records';
			} else {
		?>
			<table>
				<thead>
					<tr>
						<th>id</th>
						<th>First name</th>
						<th>Last name</th>
						<th>Bio</th>
					</tr>
				</thead>
				<tbody>
				<?php
				//???????
					foreach($records as $r) {
				?>
					<tr>
						<td><?php echo escape($r->id);?></td>
						<td><?php echo escape($r->first_name);?></td>
						<td><?php echo escape($r->last_name);?></td>
						<td><?php echo escape($r->bio);?></td>
					</tr>
				<?php
					}
				?>
				</tbody>
			</table>
		<?php
			}
		?>
		<hr />

		<form action="" method="post">	
			First name
			<input type="text" name="first_name" autocomplete="off" /><br />
			Last name
			<input type="text" name="last_name" autocomplete="off" /><br />
			Bio
			<textarea name="bio"></textarea><br />

			<input type="submit" value="Insert" />
		</form>

	</body>
	</html>
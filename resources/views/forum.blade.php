	<?    
	if (isset($_GET['message'])) {
	    
	    $user=$mysqli->real_escape_string($_GET['user']);
	    $message=$mysqli->real_escape_string($_GET['message']);
	    $date=date('Y-m-d H:i:s');
	    
	    $sql="INSERT INTO forum(id, user, message, date) VALUES(0,'$user','$message','$date')";
	    $mysqli->query($sql);
	}

	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="get" action="forum.php">
<p>User: 
  <label for="user"></label>
  <input type="text" name="user" id="user" />
  <br />
</p>
<p>Message: <br />
  <label for="message"></label>
  <textarea name="message" id="message" cols="45" rows="5"></textarea>
</p>
<p>
  <input type="submit" name="submit" id="submit" value="Post message" />
</p>
</form>
</body>
</html>

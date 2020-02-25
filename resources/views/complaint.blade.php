
<?php 
	if (!Session::has('member')) {
		echo "login first";
		header("Location: /member");
		exit;
	}
 ?>
<html>
<head>
	<title>
		Complaint
	</title>
</head>
<body>

	{{ Session::get('memberUsername') }}
	<form action="addcomplaint" method="POST">
	}
@csrf
Your name: <br>
<input type="text" name="name"><br>
<br>

Your email: <br>
<input type="text" name="email"><br>
<br>
Title of your compliant : <br>
<input type="text" name="title">
Your compliant: <br>
<textarea name="complaint" rows="15" cols="50"></textarea><br><br>

<input type="submit" value="Submit">
 
</form>

</body>
</html>
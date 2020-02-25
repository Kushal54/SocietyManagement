<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<body>	
	<form action="/adminLogin" method="post">
		@csrf
		Enter Username: <input type="text" name="username">
		Enter Password: <input type="text" name="password">
		<input type="submit" name="submit" value="LOGIN">
	</form>
</body>
</html>
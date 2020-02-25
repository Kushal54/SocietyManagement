<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<body>	
	<form action="/memberLogin" method="post">
		@csrf
		Enter Username: <input type="text" name="username">
		Enter Password: <input type="text" name="password">
		<input type="submit" name="submit" value="LOGIN">
	</form>
		if you are not registered..
		<a href="/memberRegister">Register</a>
</body>
</html>
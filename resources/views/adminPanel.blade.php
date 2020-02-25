<?php 
	if (!Session::has('admin')) {
		echo "login first";
		header("Location: /admin");
		exit;
	}
?>
<form action="/viewComplaint" method="get">
	<input type="submit" name="submit" value="viewComplaint">
</form>

<form action="/admin/logout" method="get">
	<input type="submit" name="submit" value="logout">
</form>

<form action="/admin/maintenance" method="post">
	@csrf	
	<input type="submit" name="submit" value="view members">
</form>

<form action="/admin/addNotice" method="get">
	<input type="submit" name="submit" value="Add New Notice">
</form>
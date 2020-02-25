<?php 
	if (!Session::has('admin')) {
		echo "login first";
		header("Location: /admin");
		exit;
	}
?>
<form action="adminNotice" method="post">
	@csrf
	Enter Title : <input type="text" name="title"><br>
	Enter Description : <br><textarea name="description" cols="50"  rows="10"> Enter details of notice here... </textarea>
	<input type="submit" name="submit">
</form>

<?php 
	if (!Session::has('admin')) {
		echo "login first";
		header("Location: /admin");
		exit;
	}
if(isset($comp))
{
 ?>
 @foreach($comp as $c)
 	<span>{{ $c->complaint_id }}</span>
 	<br>
 	<span>{{ $c->title }}</span>
 	<br>
	<span>{{ $c->description }}</span>
 	<br>
	<span>{{ $c->postedby }}</span>
 	<br>
 	<span>{{ $c->date }}</span>
 	<br>
 	<br>
 	<br>
 @endforeach
<?php } 

else
{
	echo "No Complaint found";
}
?>
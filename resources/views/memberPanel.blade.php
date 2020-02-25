<?php 
	if (!Session::has('member')) {
		echo "login first";
		header("Location: /member");
		exit;
	}
?>
<form action="/complaint" method="get">
	<input type="submit" name="submit" value="Complaint">
</form>

<form action="/member/logout" method="get">
	<input type="submit" name="submit" value="logout">
</form>
<h3>NOTICES</h3>
<?php 
if(isset($notice))
{

?>
 @foreach($notice as $n)
 <table>
 	<tr>
 	<td> Title </td>
 	<td> {{ $n->title }} </td>
 	</tr>
 	<tr>
 		<td>Description</td>
 		<td>{{$n->description}}</td>
 	</tr>
 	<tr>
 		<td>Date</td>
 		<td>{{$n->date}}</td>
 	</tr>
 	
 </table>
 <br><br><br>
 @endforeach
 <?php } ?>
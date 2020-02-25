
<?php if (!Session::has('admin')) {
		echo "login first";
		header("Location: /admin");
		exit;
	}
	
if(isset($notice))
{
	echo "entered";
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
 	<br><br><br>
 </table>

 @endforeach
 <?php } ?>
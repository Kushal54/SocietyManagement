
<script type="text/javascript">
window.history.forward();
function noBack() { window.history.forward(); }

	function myf($x)
	{
		alert("you have successfully changed maintenance status to paid");
	}
</script>
<?php 
	if (!Session::has('admin')) {
		echo "login first";
		header("Location: /admin");
		exit;
	}
if(isset($members))
{
 ?>
 @foreach($members as $m)
 	<?php 
 		if($m->maintenance_status == '0')
 		{
 			$main = "unpaid";
 			$p = "inline";
 		}
 		else
 		{
 			$main = "paid";
 			$p = "none";
 		}

 	 ?>
 	<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
	<div id="{{ $m->id }}">
		<br>
		<table border="1px solid" style="border-collapse: collapse ,margin:100px, padding: 20px;">
		<tr>
		<td>Flat No.</td>
	 	<td>{{ $m->flat_no }}</td>
	 	</tr>
	 	<td>Name</td>
	 	<td>{{ $m->name }}</td>
	 	</tr>
	 	<td>No. Of Person</td>
		<td>{{ $m->no_of_persons }}</td>
	 	</tr>
	 	<td>On Rent</td>
		<td>{{ $m->on_rent }}</td>
	 	</tr>
	 	<td>Mobile No.</td>
	 	<td>{{ $m->mobile }}</td>
	 	</tr>
	 	<td>Email Id</td>
	 	<td>{{ $m->email }}</td>
	 	</tr>
	 	<td>Maintenance Status</td>
	 	<td>{{ $main }}</td>
	 	</tr>	
	 	</table>
	 	<div style="display: {{ $p }};">
	 	<form action="maintenance" method="post" onsubmit="return myf({{$m->maintenance_status}})">
	 		@csrf
	 		<input type="hidden" name="id" value="  {{ $m->id }} ">
	 		<input type="submit" name="submit" value="click to change maintenance status">
	 	</form>
	 	</div>
 	</div>
 	<br>
 	<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
 	
 @endforeach
<?php } 

else
{
	echo "No members found";
}
?>
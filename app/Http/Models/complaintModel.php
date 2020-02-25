<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class complaintModel extends Model
{
	public static function addComplaint($title,$complaint,$postedby,$date)
	{
		
		DB::table('complaint')->insert(array('title' => "$title" , 'description' => "$complaint" , 'postedby' => "$postedby", 'date' => "$date" ));
		
		echo "success";
	}
	public static function viewComplaint()
	{
		$comp = DB::table('complaint')->where('status','0')->get();
		return $comp;
	}
}
?>

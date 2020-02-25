<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class adminModel extends Model
{
	public static function login($username,$password)
	{
		
		$x = DB::table('admin')->where('username',"$username")->where('password',"$password")->get();
		
		return $x;
	}
	public static function ViewMembers()
	{
		$m = DB::table('member')->get();
		return $m;
	}
	public static function maintenance($id)
	{
		$result = DB::table('member')->where('id',"$id")->first(['flat_no','on_rent']);
		if ($result->on_rent == '0') {
			$amount = "3000";
		}
		else
		{
			$amount = "6000";
		}
		 $date = date('y/m/d');
		 DB::table('maintenance')->insert(array('flat_no' => "$result->flat_no" ,'amount'=>"$amount",'paid_date'=>"$date"));
		
	}
	public static function UpdateMaintenanceStatus($id)
	{
		DB::table('member')->where('id',$id)->update(['maintenance_status' => '1']);
	}
	public static function addNotice($title,$des,$date)
	{
		DB::table('notice')->insert(array('title' => "$title" , 'description' => "$des" , 'date' => "$date"));
		echo "success";
	}
	public static function viewNotice()
	{
		$n = DB::table('notice')->get();
		return $n;
	}
}
?>

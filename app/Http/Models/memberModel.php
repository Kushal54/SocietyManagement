<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class memberModel extends Model
{
	public static function register($flat_no,$name,$mob,$email,$username,$password,$no_of_person,$occupation,$rent)
	{
		if($rent == "yes")
		{
			$x = 1;
		}
		if($rent == "no")
		{
			$x = 0;
		}
		DB::table('member')->insert(array('flat_no' => "$flat_no" , 'name'=> "$name" , 'occupation' => "$occupation" , 'no_of_persons' => "$no_of_person" , 'on_rent'=> "$x" , 'mobile' => "$mob" , 'email' => "$email" , 'username' => "$username" , 'password' => "$password"));
		echo "successss";
	}
	public static function login($username,$password)
	{
		
		$x = DB::table('member')->where('username',"$username")->where('password',"$password")->get();
		return $x;
	}
	
	public static function viewNotice()
	{
		$n = DB::table('notice')->get();
		return $n;
	}
}
?>

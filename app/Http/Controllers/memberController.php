<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Models\memberModel;

class memberController extends BaseController
{
	public function login(Request $req)
	{	
		
		$username= Input::get('username');
		$password= Input::get('password');
		$x = memberModel::login($username,$password);
		if(!$x->isEmpty())
		{
			echo "welcome " .$username;
			foreach ($x as $arr) {
				Session::put('member',$arr->username);
			}
			$notice = memberModel::viewNotice();
			return view('memberPanel',compact('notice'));
		}
		else
		{
			echo "wrong password";
		}
	}
	public function register(Request $req)
	{
		$flat_no = Input::get('flat_no');
		$name = Input::get('name');
		$mob = Input::get('mob');
		$email= Input::get('email');
		$username= Input::get('username');
		$password= Input::get('password');
		$no_of_person= Input::get('no_of_person');
		$occupation = Input::get('occupation');
		$rent = Input::get('rent');
		memberModel::register($flat_no,$name,$mob,$email,$username,$password,$no_of_person,$occupation,$rent);
		
	}
	public function logout()
	{
		Session::flush();
		return Redirect::to('/member'); 
	}
}

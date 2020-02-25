<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Models\adminModel;
class adminController extends BaseController
{
	public function login(Request $req)
	{
		$username = Input::get('username');
		$password = Input::get('password');
		$x = adminModel::login($username,$password);
		if (!$x->isEmpty()) {
			foreach ($x as $admin) {
				echo "welcome" .$admin->name;
				Session::put('admin','$admin->name');
				return view('adminPanel');
				// echo "<a href='/viewComplaint'>View Complaint </a>";
				// echo "<a href='/admin/logout'>Log Out</a>";
				//  echo "<a href='/admin/ViewMembers'>Members</a>";
				// echo '<form action="/admin/maintenance" method="post">
	 		// 		<input type="submit" name="submit" value="view members">
	 		// 		</form>';
			}
		}
		else {
			echo "fail to find admin";
		}
	}

	// public function ViewMembers()
	// {
	// 	$members = adminModel::ViewMembers();
	// 	return view('adminViewMember',compact('members'));
	// }
	public function maintenance(Request $req)
	{
		if($id = Input::get('id'))
		{
		adminModel::maintenance($id);
		adminModel::UpdateMaintenanceStatus($id);
		}
		$members = adminModel::ViewMembers();
		return view('adminViewMember',compact('members'));
	}

	public function addNotice()
	{
		if(Session::has('admin'))
		{
			echo "hi";
			$title = Input::get('title');
			$des = Input::get('description');
			$date = date('y/m/d');
			adminModel::addNotice($title,$des,$date);
			$notice = adminModel::viewNotice();
			return view('viewNotice',compact('notice'));
		}
	}
	public function logout()
	{
		Session::flush();
		return Redirect::to('/admin'); 
	}
}
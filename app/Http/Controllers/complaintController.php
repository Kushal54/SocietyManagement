<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades \Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Models\complaintModel;
class complaintController extends BaseController
{
	public function addComplaint(Request $req)
	{		
		$title = Input::get('title');
		$complaint = Input::get('complaint');
		$postedby = Session::get('memberUsername');
		$date = date("Y/m/d");
	    complaintModel::addComplaint($title,$complaint,$postedby,$date);		
	}
	public function viewComplaint()
	{
		$comp = complaintModel::viewComplaint();
		//echo "hi";
		//print_r($comp);
		
		return view('complaintView',compact('comp'));
		
		
	}
}

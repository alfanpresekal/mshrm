<?php

namespace mshrm\Http\Controllers\Admin;

use Illuminate\Http\Request;

use mshrm\Http\Requests;
use mshrm\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function GetUserList()
    {
		$results = \DB::select('SELECT * from users');
		return view('admin.UserList')->with('results', $results);	
    }
}

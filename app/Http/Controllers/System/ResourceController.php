<?php

namespace mshrm\Http\Controllers\System;

use Illuminate\Http\Request;

use mshrm\Http\Requests;
use mshrm\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function GetCSV($code)
    {
		if (\Storage::disk('local')->has('code_'.$code.'.csv'))
		{
			$contents = '../storage/app/code_'.$code.'.csv';
			return response()->download($contents);
		}
		else
		{
			return 'No file is found';
		}
    }
}

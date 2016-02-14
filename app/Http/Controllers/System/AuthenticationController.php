<?php

namespace mshrm\Http\Controllers\System;

use Illuminate\Http\Request;

use mshrm\Http\Requests;
use mshrm\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
	public function PostAccountRegister()
	{
        if (\Request::ajax())
		{
			$input = \Request::all();
			
			$validator = \Validator::make($input, [
				'nip' => 'required|max:128|unique:users',
				'email' => 'required|email|max:256|unique:users',
				'name' => 'required|max:512',
			]);

			if ($validator->fails())
			{
				return view('ajax.Feedback')->withErrors($validator);
			}
			else
			{
				$password_plain = str_random(10);
				$password_hashed = bcrypt($password_plain);
				$email = $input['email'];
				$nama_lengkap = $input['name'];
				
				$data['password'] = $password_plain;
				$data['email'] = $input['email'];
				$data['name'] = $input['name'];
				
				$date = new \DateTime;
				
				\Mail::send('emails.AccountRegister', $data, function($message) use ($email, $nama_lengkap)
				{
					$message->to($email, $nama_lengkap)->subject('Welcome!');
				});
				
				\DB::insert('INSERT INTO users (
						nip,
						name,
						email,
						password,
						superadmin,
						role_1,
						role_2,
						role_3,
						role_4,
						role_5,
						role_6,
						created_at,
						updated_at
					) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', [
						$input['nip'],
						$input['name'],
						$input['email'],
						$password_hashed,
						false,
						false,
						false,
						false,
						false,
						false,
						false,
						$date,
						$date
				]);
				
				return 'OK';
			}
		}
	}
}

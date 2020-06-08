<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    public function show_account_page() {
    	$user = User::where('name', '=', 'joe')->get();
    	return view('account-details')->with('user', $user[0]);
    }
}

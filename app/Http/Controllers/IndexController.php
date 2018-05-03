<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class IndexController extends Controller
{
    public function __construct(){

    }

    public function index() {
    	if(Auth::check()){
    		return redirect('/dashboard');
    	} else {
    		return redirect('/login');
    	}
    }

    public function dashboard() {
    	return view('dashboard.index');
    }
}

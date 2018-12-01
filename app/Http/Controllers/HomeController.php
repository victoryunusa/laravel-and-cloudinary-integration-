<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use Cloudder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
        $data['products'] = DB::table('products')->get();
        return view('welcome', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    public function index(){
        $user_data = DB::table('users')->get();
        return view('user_form')->with('user_data',$user_data);
        // return response()->json($user_data);
    }
}

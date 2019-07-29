<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
use DB;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('profile');
    }

    public function profile(Request $request){
        $id = Auth::user()->id;
        $check_pass = Auth::user()->password;

        $textbox1 = $request -> input('textbox1');
        $textbox2 = $request -> input('textbox2');
        $textbox3 = $request -> input('textbox3');
        DB::update("update users set name = ?, email = ? where id = ?", [$textbox1, $textbox2, $id]);
        //echo "successs"; 
        return view('index');

    }
}

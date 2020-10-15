<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Worklog_User;

class MemberController extends Controller
{

    public function index(){
        return view('member.index');
    }

    public function update(){

    }


    public function getLogin(){
        return view('member.login');
    }

    public function postLogin(Request $request){
        if(Auth::guard('member')->attempt(['email' => $request->email])){
            return redirect()->route('index');
        }
    }
}

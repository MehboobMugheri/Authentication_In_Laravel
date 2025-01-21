<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
       $data = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'age'      => 'required',
            'role'     => 'required',
            'password' => 'required',
        ]);
        // return $data;
        $insert = User::create($data);
        // $insert = User::create([
        //     'name'     => $request->name,
        //     'email'    => $request->email,
        //     'age'      => $request->age,
        //     'role'     => $request->role,
        //     'password' => $request->password,
        // ]);  

        // return $insert;

        if ($insert) {
            return redirect()->route('login');
        }
    }

    public function login(Request $request){
        $login = $request->validate([
            'email'    => 'required | email',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function dashboardPage(){
            return view('dashboard');
    }

    public function seeMore(){
        return view('seeMore');
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}

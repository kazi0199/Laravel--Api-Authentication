<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerSave(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login'); 
        }
    }

    public function loginMatch(Request $request)
    {
        $credentaials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);   
        
        if(Auth::attempt($credentaials))
        {
            return redirect()->route('dashboard');
        }
    }

    // public function dashboardPage()
    // {
    //     if(Auth::check())
    //     {
    //         return view('dashboard');
    //     }else
    //     {
    //         return redirect()->route('login');

    //     }
    // }

    public function dashboardPage()
    {
        return view('dashboard');
    }

    public function innerPage()
    {
        return view('inner');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }



}

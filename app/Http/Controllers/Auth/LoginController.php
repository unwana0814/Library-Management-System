<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index(){
        return view('auth.login');
    }

    public function loginUser(Request $request){
        // dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember);

        if(auth()->user() !== null && auth()->user()->role === 1){
            return redirect()->route('dashboard');

        }elseif(auth()->user() !== null && auth()->user()->role === 2){
            return redirect()->route('home');

        }else{
            return redirect()->route('register');
        }
       
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){

        return view ('auth.register');
    }

    public function registerUser(Request $request)
    {  
        //validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        //add a role_id field to the validation request
        $fields = $request->only(['name', 'email', 'password']);
        $fields["role_id"] = 3;
        $fields['password'] = Hash::make($fields['password']);

        //create & store a user from the $fields
        $check = $this->create($fields);
         
        //signin a user
        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('/users')->withSuccess('You have signed-in');
    }

    public function registerAuthor(Request $request)
    {  
        //validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        //add a role_id field to the validation request
        $fields = $request->only(['name', 'email', 'password']);
        $fields["role_id"] = 2;
        $fields['password'] = Hash::make($fields['password']);

        //create & store a user from the $fields
        $check = $this->create($fields);

         //signin a user
        Auth::attempt($request->only('email', 'password'), $request->remember);
         
        return redirect()->route('dashboard')->withSuccess('You have signed-in');

    }
    public function create(array $data)
    {
      return User::create($data);
    }   

}

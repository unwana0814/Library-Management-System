<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{ 

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->get()->first();

        if($user !== null)
        {
            
            if($user->role_id === 1){
                return redirect()->route('/dashboard', $user->id);
            }

            elseif($user->role_id === 2){
                return redirect()->route('/admin/user', $user->id);
            }

            else{
                return redirect()->route('/user');
            }
        }

        else{
            return redirect()-> back();
        }
    }
  
    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistrationUser(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
           
        $fields = $request->only(['name', 'email', 'password']);
        $fields["role_id"] = 3;
        $fields['password'] = Hash::make($fields['password']);
        $check = $this->create($fields);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('/users')->withSuccess('You have signed-in');
    }

    public function customRegistrationAuthor(Request $request)
    {  
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $fields = $request->only(['name', 'email', 'password']);
        $fields["role_id"] = 2;
        $fields['password'] = Hash::make($fields['password']);
        $check = $this->create($fields);
         
        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('/admin/user')->withSuccess('You have signed-in');

    }

    public function create(array $data)
    {
      return User::create($data);
    }      

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}


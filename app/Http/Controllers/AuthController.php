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
        $credentials = $request->validate([
            'email' => 'required'|'email',
            'password' => 'required',
        ]);

        // $credentials = $request->only('email', 'password');

        // dd($credentials);

        $user = Auth::attempt($credentials);
        $request->session()->regenerate();

        // $user = User::where('email', $credentials['email'])->get()->first();

        if(auth()->user() !== null)
        {

            if(auth()->user()->role_id === 1){
                return redirect()->route('admin.dashboard');
            }

            elseif(auth()->user()->role_id === 2){
                return redirect()->route('admin.dashboard');
            }

            else{
                return redirect()->route('admin.dashboard');
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
            'password' => 'required',
        ]);

        $fields = $request->only(['name', 'email', 'password']);
        $fields["role_id"] = 3;
        $fields['password'] = Hash::make($fields['password']);
        $check = $this->create($fields);

        $credentials = $request->only(['email', 'password']);
        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect("admin.dashboard")->withSuccess('You have signed-in');
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

        $credentials = $request->only(['email', 'password']);
        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect()->route('admin.dashboard')->withSuccess('You have signed-in');

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

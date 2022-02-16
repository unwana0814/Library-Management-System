<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard(){
        return view('admin.dashboard');
    }

    public function showUser(){
        $users = User::where('role_id', 2)->get();
        return view('admin.users.addauthor',  
        ['users' => $users,]);
    }

    public function deleteUser(User $user){
        $user->delete();
    }
}

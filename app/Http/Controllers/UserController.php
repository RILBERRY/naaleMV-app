<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all('id','name','email','admin_approve_at');
        return view('pages.user', compact('users'));
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->update(['admin_approve_at' => Carbon::now()]);
        return redirect(route('user-list'));
    }
    public function revoke($id)
    {
        $user = User::findOrFail($id);
        $user->update(['admin_approve_at' => null]);
        return redirect(route('user-list'));
    }

}

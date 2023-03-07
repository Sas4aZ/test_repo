<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function create_user() {
        return view("auth.register");
    }

public function store_user(Request $request) {
    $request->validate([
        'name' => ['required'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'roll_id' =>['required', 'integer'],
        'password' => ['required', Rules\Password::defaults()],
    ]);

    $user = new User();
    $user->email = $request->email;
    $user->name = $request-> name;
    $user->roll_id = $request->roll_id;
    $user->password=Hash::make($request->password);

    $user->save();

    return redirect(route('login'));

}

public function login() {
        return view('auth.login') ;
}
public function store_login(Request $request) {
    $request->validate([
        'email' => ['required'],
        'password' => ['required'],
    ]);

        $credentials = [
        'email'=> $request->email,
        'password'=> $request->password
    ];
    if(Auth::attempt($credentials)){
        return redirect('come');
    }
    else{
        return 'wrong credentials';
    }
}
public function come() {
        return view('auth.come');
}
public function logout() {
    Auth::logout();
    return view('auth.login');
}
}

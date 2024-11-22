<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginRegistercontroller extends Controller
{
    public function register()
{
    return view('auth.register');
}

public function store(request $request)
{
    $request->validate([
        'name'=>'required|string|max:250',
        'email' =>'required|email|max:250|unique:users',
        'password'=>'required|min:8|confireed'
]);

user::create([
'name'=> $request->name,
'email'=> $request->email,
'password'=> hash::make($request->password),
'usertype' => 'admin'
]);
$credentials -$request->only('email','password');
auth::attempt($credentialas);
$request->session()->regenerate();
if ($request->user()->usernya = 'admin'){
    return redirect('admin/dasboard')->withsuccess('you have successfully registered $ logged in!');

}
return redirect()->intended(route('dashboard'));
}
public function login()
{
    return view('auth.login');
}
public function authenticate(request $request)
{
    $credentials = $request ->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

if (Auth::attempt($credentials)) {
    $request ->session()->regenerate();
    if ($request->user()->usertype == 'admin'){
        return redirect('admin/dashboard')->withsuccess('you have succesfully loget in!');
    }
}
return back()->withErrors([
    'email'=>'your provided credentials do not match in our records',
])->onlyInput('email');
}
    public function logout(request $request)
{
    auth::logout();
    $request->session()->invalidate();
    $requesst->session()->regeneratetoken();
    return redirect()->route('login')
    ->withsuccess('you have logged out successfully!');;

}
}

 
   
    

   
   
    
        
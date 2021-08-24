<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CustomUser;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        return view('user', ['user' => $user]);
    }
    public function create()
    {
        return view('register-flower');
    }

    public function store(Request $request)
    {
        $validations = $request->validate([
            'username' => 'required|max:50',
            'email' => 'required|email:rfc',
            'password' => 'required'
        ]);


        //validate automatically return back() to previous page if errors
        $user = new CustomUser;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        // redirect to flowers list with a message
        return 'saved succesfully';
    }
    public function show_login()
    {
        return view('login-form');
    }

    // Log the user
    public function login(Request $request)
    {
        // Validations
        $validations = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Try to retrieve user from DB
        $user = CustomUser::where('username', '=', $request->username)->first();

        // Check if the user exists in the DB
        if (isset($user)) {
            // Check if password matches
            if (Hash::check($request->password, $user->password)) {
                // The passwords match...
                $request->session()->put('username', $user->username);
                return redirect('flowers');
            }
        } else {
            return redirect()->back()->with('status', 'Username doesnt exists');
        }
    }
}

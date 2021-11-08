<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //submit data to database for registration
    function submit(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
            'conf-password'=>'required_with:password|same:password'

        ]);

        $password=bcrypt($req->password);
        //dd($req->password);

        //check if email id already present in database.
        $get_email = DB::table('users-quiz')->select('email')->where('email','=',$req->email)->first();

        if($get_email)
        {
            return back()->with('error','Email already exists');

        }



        $create = DB::table('users-quiz')->insertGetId([
            'name' => $req->name,
            'email' => $req->email,
            'password' =>$password,
            'user_type' =>2
            
        ]);
        if($create)
        {
            return back()->with('success','User Created');

        }
        else {
            return back()->with('error','Error while creating user');

        }

    }
    //check details and login
    function check(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'pass' => 'required|min:5|max:12'
        ]);


        $get_email = DB::table('users-quiz')->select()->first();
        //dd($get_email);
        if ($get_email) {
            if (Hash::check($req->pass, $get_email->password)) {
                
                   
                    session(['UserType' => $get_email->user_type]);
                    session(['UserName' => $get_email->name]);
                    session(['UserID' => $get_email->id]);




                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Invalid Password');
            }
        } else {
            return back()->with('fail', 'No accout found');
        }
    }

    // logout function
    function logout()
    {
        session()->flush();
        return redirect('/');
    }
}

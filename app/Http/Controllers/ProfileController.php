<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $Profiles=Auth::user();
        return view('Dashboard.Profiles.ShowProfile',compact('Profiles'));
    }

    public function update(Request $request)
    {
        $id=User::findOrFail($request->id);
        $id->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'phone'=>$request->phone,
                'address'=>$request->address,
            ]);

        return redirect('/Profile/index');
    }
}

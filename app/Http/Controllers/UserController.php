<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {

                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'lastname' => 'required|min:2',
                    'email' => 'required|email',
                    'phone' => 'required|min:11',
                    'location' => 'required|min:2'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'lastname' => 'required|min:2',
                    'email' => 'required|email|unique:users',
                    'phone' => 'required|min:11',
                    'location' => 'required|min:2'
                ]);
            }

            if ($validate) {
                $user->name = $request['name'];
                $user->lastname = $request['lastname'];
                $user->email = $request['email'];
                $user->phone = $request['phone'];
                $user->location = $request['location'];

                $user->save();
                $request->session()->flash('success', 'Your Details Have Been Updated');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

  
    public function profile($id)
    {

        $user = User::find($id);

        if ($user) {
            return view('user.profile')->withUser($user);
        } else {
            return redirect()->back();
        }
    }
}

<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.profile');
    }

    // /////////////////////////////////////////////////
    public function edit() {

        if (Auth::user()) {
            $admin = Admin::find(Auth::user()->id);

            if($admin) {
                return view('admin.edit')->withUser($admin);
            } else {
                return redirect()->back();
            }
        } else {
            return view('admin.edit')->withUser($admin);
        }
    }

    public function update(Request $request) {
        $admin = Admin::find(Auth::user()->id);

        if ($admin) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {

                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'lastname' => 'required|min:2',
                    'email' => 'required|email',
                    'phone' => 'required|min:11'


                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'lastname' => 'required|min:2',
                    'email' => 'required|email|unique:users',
                    'phone' => 'required|min:11'


                ]);
            }if ($validate) {
                $admin->name = $request['name'];
                $admin->lastname = $request['lastname'];
                $admin->email = $request['email'];
                $admin->phone = $request['phone'];


                $admin->save();
                $request->session()->flash('success', 'Your Details Have Been Updated');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}

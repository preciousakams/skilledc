<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function passwordUpdate(Request $request) {
        $validate = $request->validate([
            'oldPassword' => 'required|min:8',
            'password' => 'required|min:8|required_with:password_confirmation'

        ]);
           $admin = Admin::find(Auth::user()->id);

           if($admin) {
               if(Hash::check($request['oldPassword'], $admin->password) && $validate) {
                    $admin->password = Hash::make($request['password']);

                    $admin->save();

                    $request->session()->flash('success', 'Your Password Have Been Updated ');
                return redirect()->back();

               } else {
                $request->session()->flash('error', 'The Entered Password Does Not Match Your Current Password');
                return redirect()->route('password.edit');
               }

           }

       }
       public function passwordEdit() {

        if (Auth::user()) {

                return view('admin.password');
            } else {
                return redirect()->back();
            }
        }

        public function profile($id)
        {

            $admin = Admin::find($id);

            if ($admin) {
                return view('admin.profile')->withUser($admin);
            } else {
                return redirect()->back();
            }
        }



}

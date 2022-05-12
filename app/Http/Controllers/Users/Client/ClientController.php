<?php

namespace App\Http\Controllers\Users\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    public function index()
    {
        return view('client.profile');
    }
    // ////////////////////////////////////

    public function edit()
    {

        if (Auth::user()) {
            $client = Client::find(Auth::user()->id);

            if ($client) {
                return view('client.edit')->withUser($client);
            } else {
                return redirect()->back();
            }
        } else {
            return view('client.edit')->withUser($client);
        }
    }

    public function update(Request $request)
    {
        $client = Client::find(Auth::user()->id);

    if ($client) {
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
            $client->name = $request['name'];
            $client->lastname = $request['lastname'];
            $client->email = $request['email'];
            $client->phone = $request['phone'];
            $client->location = $request['location'];

            $client->save();
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
       $client = Client::find(Auth::user()->id);

       if($client) {
           if(Hash::check($request['oldPassword'], $client->password) && $validate) {
                $client->password = Hash::make($request['password']);

                $client->save();

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

            return view('client.password');
        } else {
            return redirect()->back();
        }
    }

    public function profile($id)
    {

        $client = Client::find($id);

        if ($client) {
            return view('client.profile')->withUser($client);
        } else {
            return redirect()->back();
        }
    }

}

























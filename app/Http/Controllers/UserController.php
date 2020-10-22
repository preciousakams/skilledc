<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            // $validate = null;
            if (Auth::user()->email === $request['email']) {

                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'lastname' => 'required|min:2',
                    'email' => 'required|email',
                    'phone' => 'required|min:11',
                    'location' => 'required|min:2',
                    'category' => 'required',
                       'aboutven' => 'required'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'lastname' => 'required|min:2',
                    'email' => 'required|email|unique:users',
                    'phone' => 'required|min:11',
                    'location' => 'required|min:2',
                    'category' => 'required',
                    'aboutven' => 'required'
                ]);
            }

            // if ($validate) {
                $user->name = $request['name'];
                $user->lastname = $request['lastname'];
                $user->email = $request['email'];
                $user->phone = $request['phone'];
                $user->location = $request['location'];
                $user ->category = $request['category'];
                $user ->aboutven = $request['aboutven'];


                $user->save();
                $request->session()->flash('success', 'Your Details Have Been Updated');
                return redirect()->back();
        //     } else {
        //         return redirect()->back();
        //     }
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

    // public function trial()
    // {
    //     // $users = DB::select('select * from users where name = ?', [1]);
    //     $users = User::all();

    //     return view('trial', ['users' => $users]);
    // }

    public function corporate() {
        $users = DB::table('users')->where('category', 'Corporate Service')->get();

        return view('categories.corporate', ['users' => $users]);
    }
    public function business() {
        $users = DB::table('users')->where('category', 'Business Management And Administrative Service')->get();

        return view('categories.business', ['users' => $users]);
    }

    public function installation() {
        $users = DB::table('users')->where('category', 'Installation Technician')->get();

        return view('categories.installation', ['users' => $users]);
    }
    public function event() {
        $users = DB::table('users')->where('category', 'Event Handlers')->get();

        return view('categories.event', ['users' => $users]);
    }
    public function security() {
        $users = DB::table('users')->where('category', 'Private Security Service')->get();

        return view('categories.security', ['users' => $users]);
    }
    public function repair() {
        $users = DB::table('users')->where('category', 'Repairs And Technical Support')->get();

        return view('categories.repair', ['users' => $users]);
    }
    public function furniture() {
        $users = DB::table('users')->where('category', 'Furniture And Fixture')->get();

        return view('categories.furniture', ['users' => $users]);
    }
    public function crafts() {
        $users = DB::table('users')->where('category', 'Arts And Crafts Technician')->get();

        return view('categories.crafts', ['users' => $users]);
    }
    public function education() {
        $users = DB::table('users')->where('category', 'Educational Service')->get();

        return view('categories.education', ['users' => $users]);
    }
    public function fitness() {
        $users = DB::table('users')->where('category', 'Fitness And Wellness')->get();

        return view('categories.fitness', ['users' => $users]);
    }
    public function tech() {
        $users = DB::table('users')->where('category', 'Science And Technological Service')->get();

        return view('categories.tech', ['users' => $users]);
    }
    public function distribution() {
        $users = DB::table('users')->where('category', 'Transportation, Distribution And Logistic')->get();

        return view('categories.distribution', ['users' => $users]);
    }
    public function mkting() {
        $users = DB::table('users')->where('category', 'Marketing And Sale')->get();

        return view('categories.mkting', ['users' => $users]);
    }
    public function manufacturing() {
        $users = DB::table('users')->where('category', 'Manufacturing')->get();

        return view('categories.manufacturing', ['users' => $users]);
    }
    public function law() {
        $users = DB::table('users')->where('category', 'Law & Public Safety')->get();

        return view('categories.law', ['users' => $users]);
    }
    public function hospitality() {
        $users = DB::table('users')->where('category', 'Hospitality And Tourism')->get();

        return view('categories.hospitality', ['users' => $users]);
    }
    public function financials() {
        $users = DB::table('users')->where('category', 'Financial Service')->get();

        return view('categories.financials', ['users' => $users]);
    }
    public function construction() {
        $users = DB::table('users')->where('category', 'Architecture And Construction')->get();

        return view('categories.construction', ['users' => $users]);
    }
    public function lifestyle() {
        $users = DB::table('users')->where('category', 'Beauty And Lifestyle')->get();

        return view('categories.lifestyle', ['users' => $users]);
    }





}

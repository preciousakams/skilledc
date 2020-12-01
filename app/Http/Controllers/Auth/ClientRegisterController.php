<?php
namespace App\Http\Controllers\Auth;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class ClientRegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::CLIENT;


    public function __construct()
    {
        $this->middleware('guest:client');
    }

    public function showRegisterForm()
    {
        return view('auth.client-register');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'min:11'],
            'lastname' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'clientImage' => ['sometimes','image', 'mimes:jpg,jpeg,svg.png', 'max:5000'],

        ]);
    }

    // public function register(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'phone' => ['required', 'numeric', 'min:11'],
    //         'lastname' => ['required', 'string', 'max:255'],
    //         'location' => ['required', 'string', 'max:255'],
    //         'clientImage' => ['sometimes','image', 'mimes:jpg,jpeg,svg.png', 'max:5000'],

    //     ]);

        // $request['password'] = Hash::make($request->password);
        // client::create($request->all());

    //     return redirect()->intended(route('client.profile'));
    // }
    protected function create(array $data)
    {
        if(request()->has('clientImage')){
            $avataruploaded = request()->file('clientImage');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = \public_path('/images/clientImages/');
            $avataruploaded->move($avatarpath, $avatarname);

            return Client::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone' => $data['phone'],
                'lastname' =>$data['lastname'],
                'location' =>$data['location'],
                'clientImage' => '/images/clientImages/' . $avatarname,
            ]);
        }
        return Client::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'lastname' =>$data['lastname'],
            'location' =>$data['location'],

        ]);

        // return redirect()->intended(route('client.profile'));
    }
}

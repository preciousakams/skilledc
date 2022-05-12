<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::CART;

    public function index(Request $request)
    {
        $request->session()->put('data', $request->input());
        return redirect('/add');
    }

    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'vendorName'  => ['required', 'string', 'max:255'],
                    'vendorLastname' =>['required', 'string', 'max:255'],
                    'vendorLocation' =>['required', 'string', 'max:255'],
                    'vendorCategory' =>['required', 'string', 'max:255'],
                    'clientName' =>['required', 'string', 'max:255'],
                    'clientLastname' =>[ 'required', 'string', 'max:255'],
                    'clientEmail' =>['required', 'string', 'email', 'max:255'],
                    'clientPhone' =>['required', 'numeric', 'min:11'],
                    'clientLocation' =>['required', 'string', 'max:255'],
                    'projectName' =>['required', 'string', 'max:255'],
                    'projectDesc' =>['required', 'string'],
                    'projectCost' =>['required','numeric'],
                     'projectInitialDeposit' =>['required','numeric'],
                    'projectTimeline' =>['required', 'date'],
                    'projectImage' => ['sometimes','image', 'mimes:jpg,jpeg,svg.png', 'max:5000'],
            ]);
        }

    public function create(Request $request)
    {
        if(request()->has('projectImage')){
                    $avataruploaded = request()->file('projectImage');
                    $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
                    $avatarpath = \public_path('/images/projectImages/');
                    $avataruploaded->move($avatarpath, $avatarname);

                    return Cart::create([
                                 'vendorName'  => $request ['vendorName'],
                                'vendorLastname' => $request ['vendorLastname'],
                                'vendorLocation' => $request ['vendorLocation'],
                                'vendorCategory' =>$request ['vendorCategory'],
                                'clientName' =>$request ['clientName'],
                                'clientLastname' => $request [ 'clientLastname'],
                                'clientEmail' =>$request ['clientEmail'],
                                'clientPhone' => $request ['clientPhone'],
                                'clientLocation' => $request ['clientLocation'],
                                'projectName' => $request ['projectName'],
                                'projectDesc' => $request['projectDesc'],
                                'projectCost' => $request['projectCost'],
                                'projectInitialDeposit' => $request ['projectInitialDeposit'],
                                'projectTimeline' => $request ['projectTimeline'],
                                'projectImage' => '/images/projectImages/' . $avatarname,
                                ]);
            // return view('cart.wip');

        }
        return Cart::create([
            'vendorName'  => $request ['vendorName'],
            'vendorLastname' => $request ['vendorLastname'],
            'vendorLocation' => $request ['vendorLocation'],
            'vendorCategory' =>$request ['vendorCategory'],
            'clientName' =>$request ['clientName'],
            'clientLastname' => $request [ 'clientLastname'],
            'clientEmail' =>$request ['clientEmail'],
            'clientPhone' => $request ['clientPhone'],
            'clientLocation' => $request ['clientLocation'],
            'projectName' => $request ['projectName'],
            'projectDesc' => $request['projectDesc'],
            'projectCost' => $request['projectCost'],
            'projectInitialDeposit' => $request ['projectInitialDeposit'],
            'projectTimeline' => $request ['projectTimeline'],

                ]);


    }


    // public function addclient($client)
    // {

    //     $client = Client::find(Auth::user()->id);

    //     if ($client) {
    //         return view('cart.add', ['clients' => $client]);
    //     }
    // }

}



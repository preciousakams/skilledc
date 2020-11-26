<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('data', $request->input());
        return redirect('/add');
    }
}

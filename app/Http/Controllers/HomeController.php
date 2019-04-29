<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Model\UserMakanan;
use App\Model\UserMinuman;
use App\Model\UserDessert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->level == 2){
            return view('kasir.pembayaran.index');
        } 
        else{
            $data['Makanan'] = UserMakanan::get();
            return view('front.makanan.index',$data);
        }
    }
}

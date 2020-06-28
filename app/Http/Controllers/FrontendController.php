<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index($qrcode){
        $restaurant = Restaurant::where('qrcode',$qrcode)->get()->first();

        return view('menu.index')
            ->with('restaurant',$restaurant);
    }
}

<?php

namespace App\Http\Controllers;

use App\Dishe;
use App\Menu;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::where('user_id',Auth::user()->id)->get();
        return view('restaurants.index')
            ->with('restaurants',$restaurants);
    }

    public function create(){
        $users = User::all();
        return view('restaurants.create')
            ->with("users",$users);
    }

    public function store(Request $request){
            $file = $request->file('logo');
            $extension = ".".$file->getClientOriginalExtension();
            $fileName = sha1(time()).$extension;
            $file->move(public_path('uploads'), $fileName);

            $restaurant = new Restaurant();
            $restaurant->name = $request->name;
            $restaurant->logo = $fileName;
            $restaurant->user_id = $request->user;
            $restaurant->save();
            return redirect()->back();
    }
}

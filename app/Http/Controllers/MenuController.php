<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Restaurant $restaurant){
        $menus = Menu::where('restaurant_id',$restaurant->id)->orderBy('order','asc')->get();
        return view('restaurants.menus')
            ->with('menus',$menus)
            ->with('restaurant',$restaurant->id);
    }

    public function store(Request $request){
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->nameEN = $request->nameen;
        $menu->restaurant_id = $request->restaurantid;
        $menu->save();

        return redirect()->back();
    }

    public function update(Request $request){
        $menu = Menu::find($request->menuID);
        $menu->name = $request->name;
        $menu->nameEN = $request->nameen;
        $menu->save();
        return redirect()->back();
    }

    public function delete(Request $request){
        $menu = Menu::find($request->menuID);
        $menu->delete();
        return redirect()->back();
    }
}

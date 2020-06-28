<?php

namespace App\Http\Controllers;

use App\Dishe;
use App\Menu;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(Menu $menu){
        $dishes = Dishe::where('menu_id',$menu->id)->get();
        return view('restaurants.dishes')
            ->with('dishes',$dishes)
            ->with('menu',$menu);
    }

    public function store(Request $request){
        $menu = Menu::find($request->menuid);
        $dish = new Dishe();
        $dish->name = $request->name;
        $dish->nameEN = $request->nameen;
        $dish->description = $request->description;
        $dish->descriptionEN = $request->descriptionEN;
        $dish->dishCode = $request->dishCode;
        $dish->price = $request->price;
        $dish->menu_id = $menu->id;
        $dish->save();

        return redirect()->back();
    }

    public function delete(Request $request){
        $dishe = Dishe::find($request->dishID);
        $dishe->delete();
        return redirect()->back();
    }
}

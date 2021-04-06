<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function getMenus(Restaurant $restaurant){
        return response()->json(['results' => $restaurant->menus()->orderBy('order','asc')->get()]);
    }


    public function getDishes(Menu $menu){
        return response()->json(['results' => $menu->dishes]);
    }

}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Service;
use App\Models\SubFood;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $food_types = FoodType::all();
        $foods = Food::all();
        return view('client.index')->with(['foods' => $foods, 'food_types' => $food_types]);
    }

    public function about()
    {
        return view('client.about');
    }

    public function menu()
    {
        $menus = Menu::all();
        return view('client.menu')->with(['menus' => $menus]);
    }

    public function service($id)
    {
        $service  = Service::find($id);

        return view('client.service')->with(['service' => $service]);
        ;
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function deliciousFoods()
    {
        $foods = Food::all();
        return view('client.delicious_foods')->with(['foods' => $foods]);
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Food;
use App\Models\SubFood;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $foods = SubFood::inRandomOrder()->limit(4)->get();
        return view('client.index')->with(['foods' => $foods]);
    }

    public function about()
    {
        return view('client.about');
    }

    public function menu($slug)
    {
        $menu = Menu::where('slug', $slug)->first();
        $foods = Food::where('menu_id', 2)->get();
        return view('client.menu')->with(['menu' => $menu, 'foods' => $foods]);
    }

    public function service()
    {

        return view('client.service');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function deliciousFoods()
    {
        return view('client.deliciousFoods');
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function about()
    {
        return view('client.about');
    }

    public function menu()
    {
        return view('client.menu');
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

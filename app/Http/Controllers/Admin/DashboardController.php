<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubFood;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function deleteImg(Request $request)
    {
        $menu = SubFood::find($request->id);
        if ($menu->delete()) {
            return response()->json(array('status' => true, 'html' => 'Thành công'));
        }
    }
}

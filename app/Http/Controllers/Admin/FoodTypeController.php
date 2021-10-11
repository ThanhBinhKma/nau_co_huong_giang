<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodType;
class FoodTypeController extends Controller
{
    public function index()
    {
        $menus = FoodType::paginate(20);
        return view('admin.food_type.index')->with(['menus' => $menus]);
    }

    public function create()
    {
        return view('admin.food_type.create');
    }

    public function store(Request $request)
    {
        $menu = new FoodType();
        $menu->name = $request->title;
        $menu->save();
        return redirect()->route('system_admin.food_type.index');
    }


    public function edit($id)
    {
        return view('admin.food_type.edit')->with([
            'menu' => FoodType::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $menu = FoodType::find($id);
        $menu->name = $request->title;
        $menu->save();
        return redirect()->route('system_admin.food_type.index');
    }

    public function destroy(Request $request)
    {
        try {
            $menu = FoodType::find($request->id);
            if ($menu->delete()) {
                return response()->json(array('status' => true, 'html' => 'Thành công'));
            } else {
                return response()->json(array('msg' => 'Danh mục chưa tồn tại hoặc chưa được kích hoạt'));
            }
        } catch (\Exception $e) {
            return $this->renderJsonResponse($e->getMessage());
        }
    }
}

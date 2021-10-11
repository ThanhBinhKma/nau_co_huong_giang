<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Menu;
use App\Models\SubFood;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::join('food_types', 'foods.food_type', 'food_types.id')
            ->select('foods.*', 'food_types.name as menu_name')->paginate(20);

        return view('admin.food.index')->with(['foods' => $foods]);
    }

    public function create()
    {
        $menus = FoodType::all();
        return view('admin.food.create')->with([
            'menus' => $menus
        ]);
    }

    public function store(Request $request)
    {
        $food = new Food();
        $food->name = $request->title;
        $food->food_type = $request->menu_id;
        $food->image = $request->thumbnail;
        $food->save();

        return redirect()->route('system_admin.foods.index');
    }


    public function edit($id)
    {
        $menus = FoodType::all();
        $food = Food::find($id);
        return view('admin.food.edit')->with([
            'menus' => $menus,
            'food' => $food
        ]);
    }

    public function update($id, Request $request)
    {
        $food = Food::find($id);
        $food->name = $request->title;
        $food->food_type = $request->menu_id;
        $food->image = $request->thumbnail;
        $food->save();

        return redirect()->route('system_admin.foods.index');
    }

    public function destroy(Request $request)
    {
        try {
            $menu = Food::find($request->id);
            if ($menu->delete()) {
                return response()->json(array('status' => true, 'html' => 'Thành công'));
            } else {
                return response()->json(array('msg' => 'Danh mục chưa tồn tại hoặc chưa được kích hoạt'));
            }
        } catch (\Exception $e) {
            return $this->renderJsonResponse($e->getMessage());
        }
    }

    public function deleteSubFood(Request $request)
    {
    }
}

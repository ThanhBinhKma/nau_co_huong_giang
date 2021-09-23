<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Menu;
use App\Models\SubFood;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::join('menus', 'foods.menu_id', 'menus.id')
            ->select('foods.*', 'menus.name as menu_name')->paginate(20);

        return view('admin.food.index')->with(['foods' => $foods]);
    }

    public function create()
    {
        $menus = Menu::all();
        return view('admin.food.create')->with([
            'menus' => $menus
        ]);
    }

    public function store(Request $request)
    {
        $food = new Food();
        $food->name = $request->title;
        $food->menu_id = $request->menu_id;
        $food->save();
        $name_sub_food = $request->name_sub_food;
        if (isset($request->name_sub_food) && count($name_sub_food) > 0) {
            for ($i = 0; $i < count($name_sub_food); $i++) {
                $image = $request->img_sub_food[$i];
                $name_file = time() . $image->getClientOriginalName();
                $image->move('images', $name_file);
                $sub_food = new SubFood();
                $sub_food->name = $name_sub_food[$i];
                $sub_food->image = $name_file;
                $sub_food->food_id = $food->id;
                $sub_food->save();
            }
        }
        return redirect()->route('system_admin.menus.index');
    }


    public function edit($id)
    {
        $menus = Menu::all();
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
        $food->menu_id = $request->menu_id;
        $food->save();
        $name_sub_food = $request->name_sub_food;
        if (isset($request->name_sub_food) && count($name_sub_food) > 0) {
            SubFood::where('food_id', $id)->delete();
            for ($i = 0; $i < count($name_sub_food); $i++) {
                $image = $request->img_sub_food[$i];
                $name_file = time() . $image->getClientOriginalName();
                $image->move('images', $name_file);
                $sub_food = new SubFood();
                $sub_food->name = $name_sub_food[$i];
                $sub_food->image = $name_file;
                $sub_food->food_id = $food->id;
                $sub_food->save();
            }
        }
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

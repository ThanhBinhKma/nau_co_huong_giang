<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubFood;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::paginate(20);
        return view('admin.menu.index')->with(['menus' => $menus]);
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->description = $request->thumbnail;
        $menu->save();
        return redirect()->route('system_admin.menu.index');
    }


    public function edit($id)
    {
        return view('admin.menu.edit')->with([
            'menu' => Menu::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $menu = Menu::find($id);
        $menu->description = $request->content;
        $menu->save();
        return redirect()->route('system_admin.menu.index');
    }

    public function destroy(Request $request)
    {
        try {
            $menu = Menu::find($request->id);
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(20);
        return view('admin.services.index')->with(['services' => $services]);
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceRequest $request)
    {
        Service::create([
            'name' => $request->title,
            'image' => $request->thumbnail,
            'description' => $request->description,
            'status' => $request->status
        ]);
        return redirect()->route('system_admin.services.index');
    }

    public function destroy(Request $request)
    {
        try {
            $service = Service::find($request->id);
            if ($service->delete()) {
                return response()->json(array('status' => true, 'html' => 'Thành công'));
            } else {
                return response()->json(array('msg' => 'Danh mục chưa tồn tại hoặc chưa được kích hoạt'));
            }
        } catch (\Exception $e) {
            return $this->renderJsonResponse($e->getMessage());
        }
    }

    public function edit($id)
    {
        return view('admin.services.edit')->with([
            'service' => Service::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $service->name = $request->title;
        $service->description = $request->description;
        $service->image = $request->thumbnail;
        $service->save();
        return redirect()->route('system_admin.services.index');
    }
}

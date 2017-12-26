<?php

namespace App\Http\Controllers\views\admin;

use App\Models\Module;
use App\Helpers\ListHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index(Request $request)
    {
        try
        {
            $services = Module::orderBy('id', 'desc')
            ->get();

            return view('admin.modules.index', ['services' => $services]);
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }
    }

    public function create()
    {
        $icons = ListHelper::getIcons();
        $colours = ListHelper::getColours();

        return view('admin.modules.create', compact('icons', 'colours'));
    }


    public function store(Request $request)
    {
        $module = Module::create($request->except(['_token']));
        return redirect()->route('modules.edit', $module->id);
    }

    public function edit($id)
    {
        $module = Module::find($id);
        if (!$module) {
            return redirect()->route('modules.index');
        }

        $icons = ListHelper::getIcons();
        $colours = ListHelper::getColours();

        return view('admin.modules.edit', compact('icons', 'colours', 'module'));
    }

    public function update(Request $request, $id)
    {
        Module::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect()->back()->with('Service successfully updated');
    }
}

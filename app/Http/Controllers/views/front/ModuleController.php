<?php

namespace App\Http\Controllers\views\front;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index(Request $request)
    {
        try
        {
            $services = Module::get();

            return view('front.services.index', ['services' => $services]);
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }
    }
}

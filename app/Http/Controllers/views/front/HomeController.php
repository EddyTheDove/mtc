<?php

namespace App\Http\Controllers\views\front;

use App\Models\Page;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index ()
    {
        $statement = Page::where('slug', 'statement')->first();
        $services = Module::orderBy('id')->take(8)->get();

        return view('front.home.index', compact('statement', 'services'));
    }
}

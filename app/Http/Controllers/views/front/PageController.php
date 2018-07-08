<?php

namespace App\Http\Controllers\views\front;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function show ($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if (!$page) abort(404);

        return view('front.pages.show', compact('page'));
    }
}

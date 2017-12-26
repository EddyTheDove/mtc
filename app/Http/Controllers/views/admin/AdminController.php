<?php

namespace App\Http\Controllers\views\admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function home()
    {
        $totalItems = DB::table('losts')->count();
        $availableItems = DB::table('losts')->where('status', '=', 'available')->count();
        $collectedItems = $totalItems - $availableItems;

        return view('admin.all.dashboard', compact('totalItems', 'availableItems', 'collectedItems'));
    }




    public function files()
    {
        return view('admin.all.files');
    }
}

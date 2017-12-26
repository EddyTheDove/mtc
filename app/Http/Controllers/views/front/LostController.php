<?php

namespace App\Http\Controllers\views\front;

use App\Models\Lost;
use App\Helpers\ListHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LostController extends Controller
{
    public function index (Request $request)
    {
        $keywords = $request->keywords;

        $losts = Lost::when($keywords, function($query) use ($keywords) {
            return $query->where('name', 'rlike', $keywords);
        })
        ->when($request->type, function($query) use ($request) {
            return $query->where('type', $request->type);
        })
        ->orderBy('id', 'desc')
        ->paginate(50);

        $types = ListHelper::getDocumentTypes();

        return view('front.losts.index', ['items' => $losts, 'types' => $types]);
    }
}

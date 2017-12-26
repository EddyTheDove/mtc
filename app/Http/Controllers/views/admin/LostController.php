<?php

namespace App\Http\Controllers\views\admin;

use App\Models\Lost;
use App\Helpers\ListHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LostController extends Controller
{
    public function index (Request $request)
    {
        $status = null;
        if ( $request->has('status') && $request->status != '' ) {
            if ( in_array($request->status, ['available', 'collected']) ) {
                $status = $request->status;
            }
        }

        $keywords = $request->keywords;

        $losts = Lost::when($keywords, function($query) use ($keywords) {
            return $query->where('name', 'rlike', $keywords);
        })
        ->when($status, function($query) use ($status) {
            return $query->where('status', $status);
        })
        ->orderBy('id', 'desc')
        ->paginate(50);

        $types = ListHelper::getDocumentTypes();

        return view('admin.losts.index', ['items' => $losts, 'types' => $types]);
    }

    public function edit ($id)
    {
        $lost = Lost::find($id);
        $types = ListHelper::getDocumentTypes();

        if (!$lost) return redirect()->route('losts.index');

        return view('admin.losts.edit', compact('lost', 'types'));
    }


    public function store(Request $request)
    {
        Lost::create($request->except(['_token']));
        return redirect()->back()->with('message', 'New item successfully added');
    }

    public function update (Request $request, $id)
    {
        Lost::where('id', $id)->update($request->except(['_method', '_token']));
        return redirect()->back()->with('message', 'Item successfully updated');
    }

    public function destroy($id)
    {
        Lost::where('id', $id)->delete();
        return redirect()->route('losts.index');
    }
}

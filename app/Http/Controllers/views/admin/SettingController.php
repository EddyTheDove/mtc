<?php

namespace App\Http\Controllers\views\admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function show()
    {
        $set = Settings::first();
        return view('admin.all.settings', compact('set'));
    }



    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'app_name'      => 'required',
            'admin_email'   => 'required'
        ]);

        if($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'application name and admin email are required']);



        $set = Settings::first();
        $set->app_name          = $request->has('app_name') ? $request->app_name : $set->app_name;
        $set->admin_email       = $request->has('admin_email') ? $request->admin_email : $set->admin_email;
        $set->business_to_name  = $request->has('business_to_name') ? $request->business_to_name : $set->business_to_name;
        $set->business_to_email = $request->has('business_to_email') ? $request->business_to_email : $set->business_to_email;
        $set->phone             = $request->phone;
        $set->phone2            = $request->phone2;
        $set->phone3            = $request->phone3;
        $set->phone4            = $request->phone4;
        $set->addresse_street   = $request->addresse_street;
        $set->addresse_suburb   = $request->addresse_suburb;
        $set->addresse_postcode = $request->addresse_postcode;
        $set->addresse_state    = $request->addresse_state;
        $set->app_motto         = $request->app_motto;
        $set->save();

        return redirect()->back()->with('message', 'Settings successfully updated!');
    }
}

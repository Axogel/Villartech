<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSetting;
use App\Http\Controllers\AdminSettingController;

class AboutUsController extends Controller
{
    //
    public function index() {
        return view ('home');
    }
    public function welcome() {
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
        ->get();
        return view('aboutUs')-> with('settings' => $setting);
    }
}

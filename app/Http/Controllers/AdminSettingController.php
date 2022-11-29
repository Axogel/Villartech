<?php

namespace App\Http\Controllers;

use App\Models\AdminSetting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['settings'] = AdminSetting::orderBy('id','desc')->paginate(5);
        return view ('settings.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(AdminSetting $setting)
    {
        return view('settings.show',compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminSetting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminSetting $setting)
    {
        return view('settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email'=> 'nullable',
            'phone'  => 'nullable',
            'date' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'address' => 'nullable'
        ]);
     
        $setting = AdminSetting::find($id);
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->date = $request->date;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->address = $request->address;
        $setting->save();
        return redirect()->route('settings.edit',  $setting->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminSetting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminSetting $setting)
    {
        $setting->delete();
        return redirect()->route('settings.index')
        ->with('success','Setting has been deleted successfully');
    }
}

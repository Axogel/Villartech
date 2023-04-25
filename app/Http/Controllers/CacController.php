<?php

namespace App\Http\Controllers;

use App\Models\Cac;
use Illuminate\Http\Request;

class CacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cac = Cac::orderBy('id', 'desc')->paginate(12);
        return view ('cacs.index', $cac)->with('cacs', $cac);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cacs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cac = new Cac;
        $cac->name = $request->name;
        $cac->save();
        return redirect()->route('cacs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cac  $cac
     * @return \Illuminate\Http\Response
     */
    public function show(Cac $cac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cac  $cac
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cac = Cac::find($id);
        return view('cacs.edit',compact('cac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cac  $cac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cac = Cac::find($id);
        $cac->name = $request->name;
        $cac->save();
        return redirect()->route('cacs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cac  $cac
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cac = Cac::find($id);
        $cac->delete();
        return redirect()->route('cacs.index');
    }
}

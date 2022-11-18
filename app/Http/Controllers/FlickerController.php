<?php

namespace App\Http\Controllers;

use App\Models\Flicker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FlickerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flickers = Flicker::orderBy('id','desc')->paginate(10);
        return view ('flickers.index', $flickers)->with('flickers', $flickers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flickers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $flicker = new Flicker;
        $flicker->name = $request->name;

        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);

         $url = $request->image->store('images', 'public');
         $flicker->image = $url ?? null;      
         $flicker->save();


        
         return redirect()->route('flickers.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flicker  $flicker
     * @return \Illuminate\Http\Response
     */
    public function show(Flicker $flicker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flicker  $flicker
     * @return \Illuminate\Http\Response
     */
    public function edit(Flicker $flicker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flicker  $flicker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flicker $flicker)
    {
     
        if ($request->image) {

            if(File::exists(storage_path('app/public/'.$flicker->image)))
                unlink(storage_path('app/public/'.$flicker->image));

            $url = $request->image->store('images', 'public');
            $flicker->image = $url ?? null;
        }

        $flicker->save();

        return redirect()->route('flickers.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flicker  $flicker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flicker $flicker)
    {

                        if(File::exists(storage_path('app/public/'.$flicker->image))) {
                            unlink(storage_path('app/public/'.$flicker->image));

                        }


                $flicker->delete();
                return redirect()->route('flickers.index');

}

}

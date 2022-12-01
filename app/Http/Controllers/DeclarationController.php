<?php

namespace App\Http\Controllers;

use App\Models\Declaration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DeclarationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declaration = Declaration::orderBy('id','desc')->paginate(10);
        return view ('declarations.index', $declaration)->with('declarations', $declaration);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('declarations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $declaration  = New Declaration;
        $declaration->client = $request->client;
        $declaration->testimony = $request ->testimony;

        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);

         $url = $request->client_image->store('clients', 'public');
         $declaration->client_image = $url ?? null;      
         $declaration->save();
         return redirect()->route('declarations.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function show(Declaration $declaration)
    {
        return view('declarations.show',compact('declaration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function edit(Declaration $declaration)
    {
        return view('declarations.edit',compact('declaration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Declaration $declaration)
    {
        $declaration = Declaration::find($id);

        $declaration->client = $request->client;
        $declaration->testimony = $request->testimony;
        if ($request->client_image) {

            if(File::exists(storage_path('app/public/'.$declaration->client_image)))
                unlink(storage_path('app/public/'.$declaration->client_image));

            $url = $request->client_image->store('clients', 'public');
            $declaration->client_image = $url ?? null;
        }

        $declaration->save();

        return redirect()->route('declarations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Declaration $declaration)
    { 
        if(File::exists(storage_path('app/public/'.$declaration->client_image))) {
        unlink(storage_path('app/public/'.$declaration->client_image));

    }
        $declaration->delete();
        return redirect()->route('declarations.index');
    }
}

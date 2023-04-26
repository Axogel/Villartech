<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::orderBy('id', 'desc')->paginate(10);
        return view('portfolios.index', $portfolio)->with('portfolios', $portfolio);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolios.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio;
        $portfolio->name = $request->name;
        $portfolio->url = $request->url;
        $portfolio->description = $request->description;
        $portfolio->skills = $request->skills;
        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);

         $url = $request->image->store('images', 'public');
         $portfolio->image = $url ?? null;      
         $portfolio->save();
         return redirect()->route('portfolios.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->name = $request->name;
        $portfolio->url = $request->url;
        $portfolio->description = $request->description;
        $portfolio->skills = $request->skills;
        if ($request->image) {

            if(File::exists(storage_path('app/public/'.$portfolio->image)))
                unlink(storage_path('app/public/'.$portfolio->image));

            $url = $request->image->store('images', 'public');
            $portfolio->image = $url ?? null;
        }

        $portfolio->save();
        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if(File::exists(storage_path('app/public/'.$portfolio->image))) {
            unlink(storage_path('app/public/'.$portfolio->image));

        }
            $portfolio->delete();
            return redirect()->route('portfolios.index');
    }
}

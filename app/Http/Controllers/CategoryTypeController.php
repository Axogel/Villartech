<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use Illuminate\Http\Request;

class CategoryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryType= CategoryType::orderBy('id', 'desc')->paginate(12);
        return view ('category-types.index', $categoryType)->with('categoryTypes', $categoryType);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category-types.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoryType = new CategoryType;
        $categoryType->name = $request->name;
        $categoryType->save();
        return redirect()->route('category-types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryType  $categoryType
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryType $categoryType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryType  $categoryType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryType = CategoryType::find($id);
        return view('category-types.edit',compact('categoryType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryType  $categoryType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $categoryType = CategoryType::find($id);
        $categoryType->name = $request->name;
        $categoryType->save();
        return redirect()->route('category-types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryType  $categoryType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryType = CategoryType::find($id);
        $categoryType->delete();
        return redirect()->route('category-types.index');
    }
}

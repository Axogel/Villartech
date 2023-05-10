<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $category = Category::orderBy('id', 'desc')->paginate(5);

        if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view ('categories.index', $category)->with('categories', $category);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $opciones = CategoryType::pluck('name', 'id');

        return view('categories.create')->with('opciones', $opciones);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->category_type_id = $request->category_type_id;

        $category->save();
        return redirect()->route('categories.index')->withSuccessMessage('Category have been created', 'Category have been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $cac
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
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
        $opciones = CategoryType::pluck('name', 'id');
        $category = Category::find($id);
        return view('categories.edit',compact('category', 'opciones'));
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
        $category = Category::find($id);
        $category->name = $request->name;
        $category->category_type_id = $request->category_type_id;

        $category->save();
        return redirect()->route('categories.index')->withSuccessMessage('Category have been updated', 'Category have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cac  $cac
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->withSuccessMessage('Category have been deleted', 'Category have been deleted');
    }
}

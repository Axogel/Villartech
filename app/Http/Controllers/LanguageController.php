<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $language = Language::orderBy('id','desc')->paginate(5);

         if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete Language!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view ('languages.index', $language)->with('languages', $language);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language = new Language;
        $language->name = $request->name;
        $language->save();
        return redirect()->route('languages.index')->withSuccessMessage('Language have been created', 'Language have been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::find($id);
        return view('languages.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $language = Language::find($id);
        $language->name = $request->name;
        $language->save();
        return redirect()->route('languages.index')->withSuccessMessage('Language have been updated', 'Language have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::find($id);
        $language->delete();
        return redirect()->route('languages.index')->withSuccessMessage('Language have been deleted', 'Language have been deleted');
    }
}

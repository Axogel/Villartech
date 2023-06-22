<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faq = Faq::latest()->paginate(5);


 
        if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete FAQ!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view ('faqs.index', $faq)->with('faqs', $faq);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $faq = New Faq;
        $faq->title = $request->title;
        $faq->answer = $request->answer;
        $request->validate([
            '*' => 'required',

         ], $message = [
            'required' => 'All fields are required.',]);
        $faq->save();

        return redirect()->route('faqs.index')->withSuccessMessage('FAQ have been created', 'FAQ have been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $faq = Faq::find($faq)[0];
        //dd($faq);
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->title = $request->title;
        $faq->answer = $request->answer;
        $request->validate([
            '*' => 'required',

         ], $message = [
            'required' => 'All fields are required.',]);
        $faq->save();

        return redirect()->route('faqs.index')->withSuccessMessage('FAQ have been updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
      $faq = Faq::find($faq)[0];
      $faq->delete();
      return redirect()->route('faqs.index')->withSuccessMessage('FAQ have been deleted', 'FAQ have been deleted');
      
    }
}

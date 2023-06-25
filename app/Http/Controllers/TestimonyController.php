<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimony = Testimony::latest()->paginate(5);
        if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete Testimony!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view ('testimonies.index', $testimony)->with('testimonies', $testimony);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('testimonies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $testimony = new Testimony;
        $testimony->author = $request->author;
        $testimony->description = $request->description;
        $testimony->descriptionEs = $request->descriptionEs;
        $active = $request->input('active') ? 1 : 0;
        $testimony->active = $active;



        $request->validate([
            '*' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
         ], $message = [
            'image.required' => 'Please provide an image',
            'image.mimes' => 'Please provide a valid image format (jpeg,png,jpg,gif,svg)',
            'required' => 'All fields are required.',]);
            $url = $request->image->store('uploads/images/testimonials', 'public');
            $testimony->image = $url ?? null; 
         $testimony->save();

        return redirect()->route('testimonies.index')->withSuccessMessage('Testimony  have been created', 'Testimony have been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimony = Testimony::find($id);
        return view('testimonies.show', compact('testimony') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        return view('testimonies.edit',compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        $testimony->author = $request->author;
        $testimony->description = $request->description;
        $testimony->descriptionEs = $request->descriptionEs;
        $active = $request->input('active') ? 1 : 0;
        $testimony->active = $active;


        $request->validate([
            '*' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
         ], $message = [
            'image.required' => 'Please provide an image',
            'image.mimes' => 'Please provide a valid image format (jpeg,png,jpg,gif,svg)',
            'required' => 'All fields are required.',]);
            if ($request->image) {

                if(File::exists(storage_path('app/public/'.$testimony->image))){
                    unlink(storage_path('app/public/'.$testimony->image));
                }
                $url = $request->image->store('uploads/images/testimonials', 'public');
                $testimony->image = $url ?? null;
            }
         $testimony->save();

        return redirect()->route('testimonies.index')->withSuccessMessage('Testimony  have been Updated', 'Testimony have been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $testimony = Testimony::find($id);
        $testimony->delete();
        return redirect()->route('testimonies.index')->withSuccessMessage('Testimony  have been deleted', 'Testimony have been deleted');
    }
}

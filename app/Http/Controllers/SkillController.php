<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $skill = Skill::orderBy('id','desc')->paginate(5);

         if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete Skill!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view ('skills.index', $skill)->with('skills', $skill);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new Skill;
        $skill->name = $request->name;   
             $request->validate([
            '*' => 'required',

         ], $message = [
            'required' => 'All fields are required.',]);
        $skill->save();
        return redirect()->route('skills.index')->withSuccessMessage('Skill have been created', 'Skill have been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);
        $skill->name = $request->name;
        $request->validate([
            '*' => 'required',

         ], $message = [
            'required' => 'All fields are required.',]);
        $skill->save();
        return redirect()->route('skills.index')->withSuccessMessage('Skill have been updated', 'Skill have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('skills.index')->withSuccessMessage('Skill have been deleted', 'Skill have been deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TeamUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class TeamUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamUser = TeamUser::orderBy('id','desc')->paginate(10);
        return view ('teams.index', $teamUser)->with('teamUsers', $teamUser);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teamUser = new TeamUser;
        $teamUser->name = $request->id_name;
        $teamUser->id_name = $request->id_name;
        $teamUser->email = $request->email;
        $teamUser->photo = $request->photo;
        $teamUser->skills = $request->skills;
        $teamUser->status = 1;

        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);

         $url = $request->photo->store('team', 'public');
         $teamUser->photo = $url ?? null;      
         $teamUser->save();
         return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function show(TeamUser $teamUser)
    {
        return view('teams.show',compact('teamUser'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teamUser = TeamUser::find($id);
        // dd($teamUser);
        return view('teams.edit',compact('teamUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamUser $teamUser, $id)
    {
        $teamUser = TeamUser::find($id);

        $teamUser->name = $request->id_name;
        $teamUser->id_name = $request->id_name;
        $teamUser->email = $request->email;
        $teamUser->skills = $request->skills;
        $teamUser->status = 1;
        if ($request->photo) {

            if(File::exists(storage_path('app/public/'.$teamUser->photo)))
                unlink(storage_path('app/public/'.$teamUser->photo));

            $url = $request->photo->store('images', 'public');
            $teamUser->photo = $url ?? null;
        }

        $teamUser->save();

        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamUser $teamUser, $id)
    {
       


           
        $teamUser = TeamUser::find($id);
        $teamUser->delete();
        return redirect()->route('teams.index');
}
    }


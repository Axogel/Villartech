<?php

namespace App\Http\Controllers;
use App\Models\TeamEducation;
use App\Models\TeamUser;
use App\Models\TeamExperience;
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
        $teamUser->age = $request->age;
        $teamUser->address = $request->address;
        $teamUser->description = $request->description;
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
        $teamUser->age = $request->age;
        $teamUser->address = $request->address;
        $teamUser->description = $request->description;
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





        public function getEmployee (TeamUser $teamUser, TeamEducation $teamEducation, $id) {
            $teamUser = TeamUser::find($id);
            
            $teamEducation = TeamEducation::select('id', 'developer_id', 'title', 'country', 'description', 'date')
            ->where('id', $id)
            ->get();
            
            $teamEducation = TeamEducation::orderBy('developer_id','desc')
            ->where('developer_id', $id)
            ->paginate(10);
            

            return view('teams-skills.index',compact('teamEducation' , 'teamUser'));
        }

        public function indexEmployeeSkill()
        {
            $teamEducation = TeamEducation::orderBy('developer_id','desc')->paginate(10);
            return view ('teams-skills.index', $teamEducation)->with('teamEducations', $teamEducation);
        }



        public function createEducation (TeamUser $teamUser, TeamEducation $teamEducation, $id) {


            $teamUser = TeamUser::find($id);
            $teamEducation = TeamEducation::select('id', 'developer_id', 'title', 'country', 'description')
            ->where('id', $id)
            ->get();

            return view('teams-skills.create',compact('teamUser'));

        }

        public function storeEducation (Request $request) {


            $teamEducation = New TeamEducation;
            $teamEducation->developer_id = $request->developer_id;
            $teamEducation->title = $request->title;
            $teamEducation->country = $request->country;
            $teamEducation->date = $request->date;
            $teamEducation->description = $request->description;
            $teamEducation->save();

            return redirect()->route('teams.index');

        }

        public function editEducation($id)
        {
            $teamEducation = TeamEducation::find($id);
            // dd($teamUser);
            return view('teams-skills.edit',compact('teamEducation'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\TeamUser  $teamUser
         * @return \Illuminate\Http\Response
         */
        public function updateEducation(Request $request, TeamEducation $teamEducation, $id)
        {
            $teamEducation = TeamEducation::find($id);

            $teamEducation->developer_id = $request->developer_id;
            $teamEducation->title = $request->title;
            $teamEducation->country = $request->country;
            $teamEducation->date = $request->date;
            $teamEducation->description = $request->description;
           
            $teamEducation->save();

            return redirect()->route('teams.index');

        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\TeamUser  $teamUser
         * @return \Illuminate\Http\Response
         */
            public function destroyEducation(TeamEducation $teamEducation, $id)

            {            
            $teamEducation = TeamEducation::find($id);
            $teamEducation->delete();
            return redirect()->route('teams.index');


            }
    


            public function getEmployeeExperience (TeamUser $teamUser, TeamExperience $teamExperience, $id) {

                $teamUser = TeamUser::find($id);
                
                $teamExperience = TeamExperience::select('id', 'developer_id', 'category', 'company', 'description', 'date')
                ->where('id', $id)
                ->get();
                
                $teamExperience = TeamExperience::orderBy('developer_id','desc')
                ->where('developer_id', $id)
                ->paginate(10);
                
    
                return view('teams-experience.index',compact('teamExperience' , 'teamUser'));
            }


    
            public function createExperience (TeamUser $teamUser, TeamExperience $teamExperience, $id) {


                $teamUser = TeamUser::find($id);
                $teamExperience = TeamExperience::select('id', 'category', 'company', 'description')
                ->where('id', $id)
                ->get();
    
                return view('teams-experience.create',compact('teamUser'));
    
            }
    
            public function storeExperience (Request $request) {
    
                
                $teamExperience = New TeamExperience;
                $teamExperience->developer_id = $request->developer_id;
                $teamExperience->company = $request->company;
                $teamExperience->description = $request->description;
                $teamExperience->category = $request->category;
                $teamExperience->date = $request->date;


                $teamExperience->save();
    
                return redirect()->route('teams.index');
    
            }
    
            public function editExperience($id)
            {
                $teamExperience = TeamExperience::find($id);
                // dd($teamUser);
                return view('teams-experience.edit',compact('teamExperience'));
            }
        
            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  \App\Models\TeamUser  $teamUser
             * @return \Illuminate\Http\Response
             */
            public function updateExperience(Request $request, TeamExperience $teamExperience, $id)
            {
                $teamExperience = TeamExperience::find($id);
    
                $teamExperience->developer_id = $request->developer_id;
                $teamExperience->company = $request->company;
                $teamExperience->description = $request->description;
                $teamExperience->category = $request->category;
                $teamExperience->date = $request->date;


                $teamExperience->save();
    
                return redirect()->route('teams.index');
    
            }
        
            /**
             * Remove the specified resource from storage.
             *
             * @param  \App\Models\TeamUser  $teamUser
             * @return \Illuminate\Http\Response
             */
                public function destroyExperience(TeamExperience $teamExperience, $id)
    
                {            
                $teamExperience = TeamExperience::find($id);
                $teamExperience->delete();
                return redirect()->route('teams.index');
    
    
                }
        


    }


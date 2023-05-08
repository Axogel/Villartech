<?php

namespace App\Http\Controllers;
use App\Models\TeamEducation;
use App\Models\TeamUser;
use App\Models\TeamExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\TeamSkill;
use RealRashid\SweetAlert\Facades\Alert;


class TeamUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamUser = TeamUser::orderBy('id','desc')->paginate(5);
        $title = 'Delete Emplooye!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

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
        $teamUser->team_presentation = $request->team_presentation;
        $teamUser->cv_link = $request->cv_link;
        $teamUser->residence = $request->residence;
        $teamUser->freelance = $request->freelance;
        $teamUser->team_category = $request->team_category;
        $teamUser->work_time = $request->work_time;
        $teamUser->overview = $request->overview;

        $teamUser->status = 1;

        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);

         $url = $request->photo->store('uploads/images/teams', 'public');
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
        $teamUser->team_presentation = $request->team_presentation;
        $teamUser->cv_link = $request->cv_link;
        $teamUser->residence = $request->residence;
        $teamUser->freelance = $request->freelance;
        $teamUser->team_category = $request->team_category;
        $teamUser->work_time = $request->work_time;
        $teamUser->overview = $request->overview;

        $teamUser->status = 1;
        if ($request->photo) {

            if(File::exists(storage_path('app/public/'.$teamUser->photo))){
                unlink(storage_path('app/public/'.$teamUser->photo));
            }
            $url = $request->photo->store('uploads/images/teams', 'public');
            $teamUser->photo = $url ?? null;
        }

        $teamUser->save();

        return redirect()->route('teams.index')->with('success', 'Usuario eliminado con éxito.');
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
            if(File::exists(storage_path('app/public/'.$teamUser->photo))){
                unlink(storage_path('app/public/'.$teamUser->photo));
            }
            $teamUser->delete();
            return redirect()->route('teams.index');
        }





        public function getEmployee (TeamUser $teamUser, TeamEducation $teamEducation, $id) {
            $teamUser = TeamUser::find($id);
            
            $teamEducation = TeamEducation::select('education_id', 'developer_id', 'education_title', 'education_country', 'education_description', 'education_date')
            ->where('education_id', $id)
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
            $teamEducation = TeamEducation::select('education_id', 'developer_id', 'education_title', 'education_country', 'education_description')
            ->where('education_id', $id)
            ->get();

            return view('teams-skills.create',compact('teamUser'));

        }

        public function storeEducation (Request $request) {


            $teamEducation = New TeamEducation;
            $teamEducation->developer_id = $request->developer_id;
            $teamEducation->education_title = $request->education_title;
            $teamEducation->education_country = $request->education_country;
            $teamEducation->education_date = $request->education_date;
            $teamEducation->education_description = $request->education_description;
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
            $teamEducation->education_title = $request->education_title;
            $teamEducation->education_country = $request->education_country;
            $teamEducation->education_date = $request->education_date;
            $teamEducation->education_description = $request->education_description;
           
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
                
                $teamExperience = TeamExperience::select('experience_id', 'developer_id', 'experience_category', 'experience_company', 'experience_description', 'experience_date')
                ->where('experience_id', $id)
                ->get();
                
                $teamExperience = TeamExperience::orderBy('developer_id','desc')
                ->where('developer_id', $id)
                ->paginate(10);
                
    
                return view('teams-experience.index',compact('teamExperience' , 'teamUser'));
            }


    
            public function createExperience (TeamUser $teamUser, TeamExperience $teamExperience, $id) {


                $teamUser = TeamUser::find($id);
                $teamExperience = TeamExperience::select('experience_id', 'experience_category', 'experience_company', 'experience_description')
                ->where('experience_id', $id)
                ->get();
    
                return view('teams-experience.create',compact('teamUser'));
    
            }
    
            public function storeExperience (Request $request) {
    
                
                $teamExperience = New TeamExperience;
                $teamExperience->developer_id = $request->developer_id;
                $teamExperience->experience_company = $request->experience_company;
                $teamExperience->experience_description = $request->experience_description;
                $teamExperience->experience_category = $request->experience_category;
                $teamExperience->experience_date = $request->experience_date;


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
                $teamExperience->experience_company = $request->experience_company;
                $teamExperience->experience_description = $request->experience_description;
                $teamExperience->experience_category = $request->experience_category;
                $teamExperience->experience_date = $request->experience_date;


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




                public function getEmployeeSkills (TeamUser $teamUser, TeamSkill $teamSkill, $id) {

                    $teamUser = TeamUser::find($id);
                    
                    $teamSkill = TeamSkill::select('skill_id', 'developer_id', 'skill_name', 'skill_percentage')
                    ->where('skill_id', $id)
                    ->get();
                    
                    $teamSkill = TeamSkill::orderBy('developer_id','desc')
                    ->where('developer_id', $id)
                    ->paginate(10);
                    
        
                    return view('teams-languages.index',compact('teamSkill' , 'teamUser'));
                }
    
    
        
                public function createSkills (TeamUser $teamUser, TeamSkill $teamSkill, $id) {
    
    
                    $teamUser = TeamUser::find($id);
                    $teamSkill = TeamSkill::select('skill_id', 'developer_id', 'skill_name', 'skill_percentage')
                    ->where('skill_id', $id)
                    ->get();
        
                    return view('teams-languages.create',compact('teamUser'));
        
                }
        
                public function storeSkills (Request $request) {
        
                    
                    $teamSkill = New TeamSkill;
                    $teamSkill->skill_name = $request->skill_name;
                    $teamSkill->skill_percentage = $request->skill_percentage;
                    $teamSkill->developer_id = $request->developer_id;
    
    
                    $teamSkill->save();
        
                    return redirect()->route('teams.index');
        
                }
        
                public function editSkills($id)
                {
                    $teamSkill = TeamSkill::find($id);
                    // dd($teamUser);
                    return view('teams-language.edit',compact('teamSkill'));
                }
            
                /**
                 * Update the specified resource in storage.
                 *
                 * @param  \Illuminate\Http\Request  $request
                 * @param  \App\Models\TeamUser  $teamUser
                 * @return \Illuminate\Http\Response
                 */
                public function updateSkills(Request $request, TeamSkill $teamSkill, $id)
                {
                    $teamSkill = TeamSkill::find($id);
        
                    $teamSkill->developer_id = $request->developer_id;
                    $teamSkill->skill_name = $request->skill_name;
                    $teamSkill->skill_percentage = $request->skill_percentage;
    
    
                    $teamExperience->save();
        
                    return redirect()->route('teams.index');
        
                }
            
                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  \App\Models\TeamUser  $teamUser
                 * @return \Illuminate\Http\Response
                 */
                    public function destroySkills(TeamSkill $teamSkill, $id)
        
                    {            
                    $teamSkill = TeamSkill::find($id);
                    $teamSkill->delete();
                    return redirect()->route('teams.index');
        
        
                    }
        


    }


<?php

namespace App\Http\Controllers;
use App\Models\TeamEducation;
use App\Models\TeamUser;
use App\Models\EmployeeSkill;
use App\Models\EmployeeCategory;
use App\Models\Language;
use App\Models\LanguageTeam;

use App\Models\TeamExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\TeamSkill;
use App\Models\Skill;
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
        $teamUser = TeamUser::latest()->paginate(5);
 
        if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }


        

        $title = 'Delete Employee!';
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
        $languages = Language::pluck('name', 'id');
        $skills = Skill::pluck('name','id');
        $opcionesCategory = EmployeeCategory::pluck('name', 'id');
        return view('teams.create',compact('skills', 'languages'))->with('opcionesCategory', $opcionesCategory);
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
        $skillIds = $request->input('skills');
        $jsonSkillIds = json_encode($skillIds);
        $teamUser->skills = $jsonSkillIds;
        $LanguageIds = $request->input('languages', []);
        $jsonLanguageIds = json_encode($LanguageIds);
        $teamUser->languages = $jsonLanguageIds;

        $languageLevels = $request->input('language_levels', []);



        $teamUser->age = $request->age;
        $teamUser->address = $request->address;
        $teamUser->description = $request->description;
        $teamUser->team_presentation = $request->team_presentation;
        $teamUser->cv_link = $request->cv_link;
        $teamUser->residence = $request->residence;
        $teamUser->freelance = $request->freelance;
        $slug = Str::slug($request->id_name);
        $teamUser->slug = $slug;
        $teamUser->category_id = $request->category_id;
        $teamUser->work_time = $request->work_time;
        $teamUser->overview = $request->overview;

        $teamUser->status = 1;
            
        $request->validate([
            'id_name' => 'required|string',
            'email' => 'required|email',
            'photo' => 'mimes:jpeg,png,jpg,gif,svg',
            'team_presentation' => ['required', 'url', 'regex:/(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube(?:-nocookie)?\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([a-zA-Z0-9_-]{11})/'],
            'language_levels.*' => 'nullable|integer|min:0|max:100'
        ], $message = [
            'id_name.string' => 'Please provide a name',	
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'This email address is already taken',
            'photo.required' => 'Please provide an image',
            'photo.mimes' => 'Please provide a valid image format (jpeg,png,jpg,gif,svg)',
            'team_presentation.required' => 'The video field is required.',
            'team_presentation.url' => 'The video field must be a valid URL.',
            'team_presentation.regex' => 'The video URL must be a valid YouTube link.',
            'language_levels.*.integer' => 'The language level must be an integer.',
            'language_levels.*.min' => 'The language level must be at least 0.',
            'language_levels.*.max' => 'The language level must be at most 100.'
        ]);
        

         $url = $request->photo->store('uploads/images/teams', 'public');
         $teamUser->photo = $url ?? null;     
         $itemIdsToKeep = $request->input('skills');
         $teamUser->save();
    
        foreach ($LanguageIds as $key => $languageId) {
            $languageLevel = isset($languageLevels[$key]) ? $languageLevels[$key] : null;
            $teamUser->languages()->attach($languageId, ['language_level' => $languageLevel]);
        }

         $teamUser->EmployeeSkills()->attach($request->input('skills'));
     
         return redirect()->route('teams.index')->withSuccessMessage('Employee have been created', 'Employee have been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */


    public function show(TeamUser $teamUser)
    {   $teamUsers = TeamUser::select('*')
        ->get();
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

        $languages = Language::pluck('name', 'id');
        $teamUser = TeamUser::find($id);
        $skills = Skill::pluck('name','id');
        $opcionesCategory = EmployeeCategory::pluck('name', 'id');
        return view('teams.edit',compact('teamUser','skills','languages'))->with('opcionesCategory', $opcionesCategory);
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
        $teamUser->EmployeeSkill()->delete();
        $teamUser->LanguageTeam()->delete();
        $teamUser->name = $request->id_name;
        $teamUser->id_name = $request->id_name;
        $teamUser->email = $request->email;
        $skillIds = $request->input('skills');
        $jsonSkillIds = json_encode($skillIds);
        $teamUser->skills = $jsonSkillIds;
        $LanguageIds = $request->input('Languages', []);
    
        $jsonLanguageIds = json_encode($LanguageIds);
        $teamUser->languages = $jsonLanguageIds;

        $languageLevels = $request->input('language_levels', []);

        $teamUser->age = $request->age;
        $teamUser->address = $request->address;
        $teamUser->description = $request->description;
        $teamUser->team_presentation = $request->team_presentation;
        $teamUser->cv_link = $request->cv_link;
        $teamUser->residence = $request->residence;
        $teamUser->freelance = $request->freelance;
        $teamUser->category_id = $request->category_id;
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
        $request->validate([
            'email' => 'required|email',
            'photo' => 'mimes:jpeg,png,jpg,gif,svg',
            'team_presentation' => ['required', 'url', 'regex:/(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube(?:-nocookie)?\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([a-zA-Z0-9_-]{11})/'],
            'language_levels.*' => 'nullable|integer|min:0|max:100'
        ], $message = [
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'This email address is already taken',
            'photo.required' => 'Please provide an image',
            'photo.mimes' => 'Please provide a valid image format (jpeg,png,jpg,gif,svg)',
            'team_presentation.required' => 'The video field is required.',
            'team_presentation.url' => 'The video field must be a valid URL.',
            'team_presentation.regex' => 'The video URL must be a valid YouTube link.',
            'language_levels.*.integer' => 'The language level must be an integer.',
            'language_levels.*.min' => 'The language level must be at least 0.',
            'language_levels.*.max' => 'The language level must be at most 100.'
        ]);
        

        $itemIdsToKeep = $request->input('skills');
        $teamUser->save();

        $teamUser->EmployeeSkills()->attach($request->input('skills'));

        foreach ($LanguageIds as $key => $languageId) {
            $languageLevel = isset($languageLevels[$key]) ? $languageLevels[$key] : null;
            $teamUser->languages()->attach($languageId, ['language_level' => $languageLevel]);
        }
        

        return redirect()->route('teams.index')->withSuccessMessage('Employee have been updated', 'Employee have been updated successfully');
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
            return redirect()->route('teams.index')->withSuccessMessage('Employee have been deleted', 'Employee have been deleted');
        }





        public function getEmployee (TeamEducation $teamEducation, $id) {
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

        public function storeEducation (Request $request, TeamUser $teamUser) {


            $teamEducation = New TeamEducation;
            $teamEducation->developer_id = $request->developer_id;
            $team = $request->developer_id;

            $teamEducation->education_title = $request->education_title;
            $teamEducation->education_country = $request->education_country;
            $teamEducation->education_date = $request->education_date;
            $teamEducation->education_description = $request->education_description;


            $teamEducation->save();

            return redirect()->route('employee', ['teamUser' => $team]);
        }

        public function editEducation($id)
        {
            $teamEducation = TeamEducation::find($id);
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
            $team = $request->developer_id;
            $teamEducation->education_title = $request->education_title;
            $teamEducation->education_country = $request->education_country;
            $teamEducation->education_date = $request->education_date;
            $teamEducation->education_description = $request->education_description;
           
            $teamEducation->save();

            return redirect()->route('employee', ['teamUser' => $team]);
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
            return redirect()->route('teams.index')->withSuccessMessage('Employee Education have been deleted', 'Employee have been deleted');


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
                $team = $request->developer_id;
                $teamExperience->experience_company = $request->experience_company;
                $teamExperience->experience_description = $request->experience_description;
                $teamExperience->experience_category = $request->experience_category;
                $teamExperience->experience_date = $request->experience_date;


                $teamExperience->save();
    
                return redirect()->route('employeeExperience', ['team' => $team]);
    
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
                $team = $request->developer_id;
                $teamExperience->experience_company = $request->experience_company;
                $teamExperience->experience_description = $request->experience_description;
                $teamExperience->experience_category = $request->experience_category;
                $teamExperience->experience_date = $request->experience_date;


                $teamExperience->save();
    
                return redirect()->route('employeeExperience', ['team' => $team]);
    
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
                return redirect()->route('teams.index')->withSuccessMessage('Employee Experience have been deleted', 'Employee have been deleted');
    
    
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
                    $team = $request->developer_id;
                    $teamSkill->save();
        
                    return redirect()->route('employeeSkill', ['team' => $team]);
        
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
                    $team = $request->developer_id;
                    $teamExperience->save();
        
                    return redirect()->route('employeeSkill', ['team' => $team]);
        
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
                    return redirect()->route('teams.index')->withSuccessMessage('Employee Skill have been deleted', 'Employee have been deleted');
        
        
                    }
        


    }


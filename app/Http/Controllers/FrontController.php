<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\TeamUser;
use App\Models\AdminSetting;
use App\Models\Flicker;
use App\Models\Declaration;
use App\Http\Controllers\AdminSettingController;
use App\Models\TeamEducation;
use App\Models\TeamExperience;
use App\Models\TeamSkill;
use App\Models\Skill;
use App\Models\Faq;




use App\Http\Controllers\FlickerController;
class FrontController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    private function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
    
    }
    public function portfolioDetails($id){
        $detailPortfolio = Portfolio::find($id);
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address','upwork')
        ->get();
        $skill = Skill::select('id','name')->get();
        $portfolios = Portfolio::select('id', 'name', 'image', 'url', 'skills', 'description')
        ->get()->toArray();
        foreach ($portfolios as $portafolio) {
            $cad = str_replace('[', '', $portafolio['image']);
            $cad = str_replace(']', '', $cad);
            $cad = str_replace('%', '', $cad);
            $cad = str_replace('\/', '/', $cad);
            $cad = str_replace('22', '', $cad);
            $cad = str_replace('"', '', $cad);
            
            $portafolio['formattedImage'] = $cad;
        }


        return view('detailPortfolioView')->with(['portfolios' => $portfolios,'skills' => $skill ,'settings' => $setting, 'detailPortfolio' => $detailPortfolio   ]);
    }
    public function portfolioView() {
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address','upwork')
        ->get();
        $skill = Skill::select('id','name')->get();
        $portfolios = Portfolio::select('id', 'name', 'image', 'url', 'skills', 'description')
        ->get()->toArray();
        foreach ($portfolios as $portafolio) {
            $cad = str_replace('[', '', $portafolio['image']);
            $cad = str_replace(']', '', $cad);
            $cad = str_replace('%', '', $cad);
            $cad = str_replace('\/', '/', $cad);
            $cad = str_replace('22', '', $cad);
            $cad = str_replace('"', '', $cad);
            
            $portafolio['formattedImage'] = $cad;
        }


        return view('portfolioView')->with(['portfolios' => $portfolios,'skills' => $skill ,'settings' => $setting ]);
    }

    public function servicesView() {
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
        ->get();

        $faq = Faq::select('id', 'title', 'answer')->get(); 
        

        return view('services')->with(['settings' => $setting, 'faqs' => $faq ]);
    }


    public function welcome()
    {


        $portfolios = Portfolio::select('id','name','image','url','description')
                               ->get();
        
        $team = TeamUser::select('*')
                        ->where('status',1)
                        ->get();                    

        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
                               ->get();

        $flicker = Flicker::select('id','name','image')
                          ->get();

        $declaration = Declaration::select('id', 'client', 'client_image', 'testimony')
                                  ->get();

        $teamEducation = TeamEducation::select('education_id', 'education_country','developer_id','education_title','education_date','education_description')
                                      ->leftJoin('team_users', 'team_users.id', 'team_educations.developer_id')
                                      ->get();                    

        $teamExperience = TeamExperience::select('*')
                                        ->leftJoin('team_users', 'team_users.id', 'team_experience.developer_id')
                                        ->get();

        $teamSkill = TeamSkill::select('skill_id', 'skill_name','skill_percentage','developer_id')
                              ->leftJoin('team_users', 'team_users.id', 'team_skills.developer_id')
                              ->get();

         $faq = Faq::select('id', 'title', 'answer')->get();                     


        /*$i=0; 
         foreach ($portfolio as $portafolio) {
            $agregar2 = $this->multiexplode(array("[","]",",",'"'), $portafolio->image);
            foreach ($agregar2 as $imagen){
                if($imagen != '')
                    array_push($agregar, $imagen);
            }
            //array_push($agregar);
            $portafolio->image = $agregar;
            $i++;
            $agregar = array();
          }*/
        //  dd($portfolios);

        return view('landing')->with(['portfolios' => $portfolios, 'teams' => $team, 'settings' => $setting, 'flickers' => $flicker , 'declarations' => $declaration, 'teamEducations' => $teamEducation, 'teamExperiences' => $teamExperience, 'teamSkills' => $teamSkill, 'faqs' => $faq]);

    }

    public function portfolio_details($id)
    {

        $agregar = array();

        $porta_details = Portfolio::select('portfolios.id', 'portfolios.name', 'portfolios.description', 'portfolios.image', 'portfolios.url', 'portfolios.client')  
                     ->where('portfolios.id', $id)
                     ->get();
        $technologies  = Technology::select('technologies.name')
                     ->join('portfolio_technologies as pt', 'pt.technology_id', '=', 'technologies.id')  
                     ->where('pt.portfolio_id', $id)
                     ->get();
        $i=0; 
         foreach ($porta_details as $details) {
            $agregar2 = $this->multiexplode(array("[","]",",",'"'), $details->image);
            foreach ($agregar2 as $imagen){
                if($imagen != '')
                    array_push($agregar, $imagen);
            }
            //array_push($agregar);
            $details->image = $agregar;
            $i++;
            $agregar = array();
          }

        return view('portfolio')->with(['details' => $porta_details, 'technologies' => $technologies]);
    }

        public function AboutUs(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address','upwork')
          ->get();
          return view('/aboutUs')->with('settings', $setting);

    }

        public function ContactUs(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
          ->get();
          return view('/contactUs')->with('settings', $setting);

    }

        public function EmailUs(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
          ->get();
          return view('/email')->with('settings', $setting);

    }

        public function Blog(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
          ->get();
          return view('/blog')->with('settings', $setting);

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\TeamUser;
use App\Models\AdminSetting;
use App\Models\Flicker;
use App\Models\Testimony;
use App\Models\Declaration;
use App\Http\Controllers\AdminSettingController;
use App\Models\TeamEducation;
use App\Models\TeamExperience;
use App\Models\EmployeeCategory;
use App\Models\TeamSkill;
use App\Models\Skill;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Category;





use App\Http\Controllers\FlickerController;
class FrontController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
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
    public function portfolioDetails($slug){
        $detailPortfolio = Portfolio::where('slug', $slug)->firstOrFail();
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address','upwork')
        ->get();
        $skill = Skill::select('id','name')->get();
        $portfolios = Portfolio::select('id', 'name', 'image', 'url', 'skills','slug', 'description')
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
        $portfolios = Portfolio::select('id', 'name', 'image', 'url', 'skills','slug', 'description')
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


    public function blogArticle($slug,  Request $request ) {
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
        ->get();

       $blog = Blog::with('categoryBlog')->get();

        $detailBlog = Blog::where('slug', $slug)->firstOrFail();

        $tag = Tag::select('id', 'name')
        ->get();

        
        // Obtener el blog actual basado en el slug
    $blogActual = Blog::where('slug', $slug)->firstOrFail();
    
    // Obtener el category_id del blog actual
    $category_id = $blogActual->category_id;

    /// Obtener los primeros 3 blogs relacionados con el mismo category_id
    $relatedPostsFirst = Blog::where('category_id', $category_id)
    ->where('id', '!=', $blogActual->id) // Excluir el blog actual
    ->take(3)
    ->get();

    // Obtener los últimos 3 blogs relacionados con el mismo category_id
    $relatedPostsLast = Blog::where('category_id', $category_id)
    ->where('id', '!=', $blogActual->id) // Excluir el blog actual
    ->latest('id')
    ->take(3)
    ->get();


        $domain = $request->root();
        
        

        return view('blog-article')->with(['settings' => $setting, 'detailBlog' => $detailBlog, 'blogs' => $blog, 'tags' => $tag , 'relatedPostsFirsts' => $relatedPostsFirst, 'relatedPostsLasts' => $relatedPostsLast, $domain]);
    }


    public function welcome()
    {

        $portfolios = Portfolio::select('id', 'name', 'image', 'url', 'skills','slug', 'description')
                               ->get();

        $testimonials = Testimony::select('id', 'author', 'description', 'descriptionEs','image', 'active')
        ->get();

        $team = TeamUser::select('*')
                        ->where('status',1)
                        ->get();                    

        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
                               ->get();

        $flicker = Flicker::select('id','name','image')
                          ->get();
        $teamCategory =  EmployeeCategory::select('id', 'description')
        ->get();
        $declaration = Declaration::select('id', 'client', 'client_image', 'testimony')
                                  ->get();

        $teamEducation = TeamEducation::select('education_id', 'education_country','developer_id','education_title','education_titleEs','education_date','education_description','education_descriptionEs')
                                      ->leftJoin('team_users', 'team_users.id', 'team_educations.developer_id')
                                      ->get();                    

        $teamExperience = TeamExperience::select('*')
                                        ->leftJoin('team_users', 'team_users.id', 'team_experience.developer_id')
                                        ->get();

        $teamSkill = TeamSkill::select('skill_id', 'skill_name','skill_percentage','developer_id')
                              ->leftJoin('team_users', 'team_users.id', 'team_skills.developer_id')
                              ->get();

         $faq = Faq::select('id', 'title', 'answer')->get();                     




        return view('landing')->with(['portfolios' => $portfolios,'testimonials'=>$testimonials ,'employeeCategories'=>$teamCategory, 'teams' => $team, 'settings' => $setting, 'flickers' => $flicker , 'declarations' => $declaration, 'teamEducations' => $teamEducation, 'teamExperiences' => $teamExperience, 'teamSkills' => $teamSkill, 'faqs' => $faq]);

    }
    public function teamDetails($slug){
        $detailTeam = TeamUser::where('slug', $slug)->firstOrFail();

        $teamEducation = TeamEducation::select('*')
        ->leftJoin('team_users', 'team_users.id', 'team_educations.developer_id')
        ->get();
        
        $teamExperience = TeamExperience::select('*')
          ->leftJoin('team_users', 'team_users.id', 'team_experience.developer_id')
          ->get();  
        $teamSkill = TeamSkill::select('skill_id', 'skill_name','skill_percentage','developer_id')
            ->leftJoin('team_users', 'team_users.id', 'team_skills.developer_id')
            ->get();   
    
        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
        ->get();
        return view('detailTeam')->with(['settings' => $setting,'teamEducations' => $teamEducation, 'teamExperiences' => $teamExperience, 'teamSkills' => $teamSkill, 'detailTeam'=> $detailTeam]);
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

        public function blog(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
          ->get();
          $blogs = Blog::select('id', 'title','titleEs',  'description','descriptionEs', 'author', 'date', 'image', 'slug')
          ->get()->toArray();

        $blog1 = Blog::select('id', 'title', 'titleEs', 'description', 'author', 'date', 'image', 'slug', 'category_id')
        ->take(3)
        ->get();

        $blog2 = Blog::select('id', 'title','titleEs', 'description', 'author', 'date', 'image', 'slug', 'category_id')
        ->latest('id')
        ->take(3)
        ->get();


          
          return view('blog')->with(['settings' => $setting, 'blogs' => $blogs, 'blogs1' => $blog1, 'blogs2' => $blog2]);

          

    }

    public function workUs(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
          ->get();
          
          return view('/workUs')->with('settings' , $setting);

    }


    public function privacy(){

        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
        ->get();
      
        return view('privacy')->with(['settings' => $setting]); 

  }

  public function job(){

          $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
          ->get();
          return view('/email')->with('settings', $setting);

    }

}

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



    public function welcome()
    {
        $agregar = array();

        $portfolio = Portfolio::select('id','name','image','url','description', 'skills')
                     ->get();
        
        $team = TeamUser::select('id','id_name','name','email','photo','skills')->where('status',1)
                     ->get();


        $setting = AdminSetting::select('id','email','phone','date','facebook','instagram','address')
                    ->get();


        $flicker = Flicker::select('id','name','image')
                    ->get();

        $declaration = Declaration::select('id', 'client', 'client_image', 'testimony')
                    ->get();



        $teamEducation = TeamEducation::select('id', 'country','developer_id','date','description')
                    ->get();

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
         //dd($portfolio);

        return view('landing')->with(['portfolios' => $portfolio, 'teams' => $team, 'settings' => $setting, 'flickers' => $flicker , 'declarations' => $declaration, 'teamEducations' => $teamEducation]);

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
}

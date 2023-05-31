<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use App\Models\PortfolioSkill;
use App\Models\Skill;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use RealRashid\SweetAlert\Facades\Alert;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::orderBy('id', 'desc')
        ->paginate(5);

        if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete Portfolio!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('portfolios.index', $portfolio)->with('portfolios', $portfolio);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::pluck('name','id');
        return view('portfolios.create', compact('skills'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio;
        $portfolio->id = $request->id;
        $portfolio->name = $request->name;
        $portfolio->url = $request->url;
        $portfolio->description = $request->description;
        $skillIds = $request->input('skills');
        $jsonSkillIds = json_encode($skillIds);
        $portfolio->skills = $jsonSkillIds;
        $request->validate([
            'image' => ['nullable', function ($attribute, $value, $fail) use ($request) {
                if (!$request->hasFile('image_file') && empty($request->image_url) && empty($value)) {
                    $fail('The image field is required.');
                }
            }],
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image_url' => ['nullable', function ($attribute, $value, $fail) use ($request) {
                if (!$request->hasFile('image_file') && empty($value)) {
                    $fail('The image or URL field is required.');
                }
            }],
            'url' => 'required|url',
        ], $message = [
            'image.required' => 'The image field is required.',
            'image_file' => 'The image field is required.',
            'image_file.image' => 'The image does not have a valid format',
            'image_file.mimes' => 'The image does not have a valid format',
            'image_url.required' => 'The image or URL field is required',
            'url.required' => 'The URL field is required',
            'url' => 'The URL is not valid',
        ]);
    
        if (!$request->hasFile('image_file') && empty($request->image_url) && empty($request->image)) {
            return redirect()->back()->withErrors(['image' => 'The image field is required.']);
        }
    
        if ($request->hasFile('image_file')) {
            $url = $request->image_file->store('uploads/images/portfolios', 'public');
            $portfolio->image = $url;
        } elseif ($request->filled('image_url')) {
            $portfolio->image = $request->image_url;
        } elseif (!empty($request->image)) {
            $portfolio->image = $request->image;
        }
    
        $itemIdsToKeep = $request->input('skills');
    
        $portfolio->save();
        $portfolio->skills()->attach($request->input('skills'));
        return redirect()->route('portfolios.index')->withSuccessMessage('Portfolio have been created', 'Portfolio have been created');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $skills = Skill::all()->pluck('name', 'id');
        $selectedOptions = $portfolio->skills;
        //dd(json_decode($portfolio->skills));
        return view('portfolios.edit',compact('portfolio', 'skills', 'selectedOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function updateMultiple(Request $request)
    {
    $portfolio = $request->input('portfolio_ids', []);
    $updatedData = [
        'name' => $request->input('name', []),
        'url' => $request->input('url', []),
        'description' => $request->input('description', []),

    ];
    foreach ($portfolioIds as $id) {
        Portfolio::where('id', $id)->update($updatedData);
    }
    return redirect()->route('portfolios.index')->with('success', 'Portfolios updated successfully.');
    }   
    public function update(Request $request, Portfolio $portfolio)
    {

        $portfolio->portfolioSkill()->delete();

         
        $portfolio->name = $request->name;
        $portfolio->url = $request->url;
        $portfolio->description = $request->description;
        $portfolio->skills = $request->skills;
        $skillIds = $request->input('skills');
        $jsonSkillIds = json_encode($skillIds);
        $portfolio->skills = $request->skills;
        if ($request->image) {

            if(File::exists(storage_path('app/public/'.$portfolio->image))){
                unlink(storage_path('app/public/'.$portfolio->image));
            }

            $url = $request->image->store('uploads/images/portfolios', 'public');
            $portfolio->image = $url ?? null;
        }
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'url' => 'required|url',
        ],$message=[
            'image.mimes' =>'Please provide a valid image format (jpeg,png,jpg,gif,svg)',
            'url'=>'The URL is not valid'
        ]);

        $portfolio->save();
        $portfolio->skills()->attach($request->input('skills'));
        return redirect()->route('portfolios.index')->withSuccessMessage('Portfolio have been updated', 'Portfolio have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroyMultiple(Request $request)
    {
        $ids= $request->ids;
        Portfolio::whereIn('id', $ids)->delete();
        return response()->json(["success"=> "portfolio have been deleted"]);
    return redirect()->route('portfolios.index');
    }
    public function destroy(Portfolio $portfolio)
    {

        if(File::exists(storage_path('app/public/'.$portfolio->image))){
            unlink(storage_path('app/public/'.$portfolio->image));
        }
   
            $portfolio->delete();
            return redirect()->route('portfolios.index')->withSuccessMessage('Portfolio have been deleted', 'Portfolio have been deleted');
    }
}

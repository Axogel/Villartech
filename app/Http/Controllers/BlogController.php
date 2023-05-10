<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTag;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use RealRashid\SweetAlert\Facades\Alert;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciones = Category::pluck('name', 'id');
        $blog = Blog::with('tags')
        ->orderBy('id', 'desc')
        ->paginate(5);


        if(session('success_message')) {

            Alert::success('Congratulations!', session('success_message'));
        }

        $title = 'Delete Blog!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        //$tags = Blog::with('tags')->get(); 
        return view ('blogs.index', $blog)->with('blogs', $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opciones = Category::pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        return view('blogs.create',compact('opciones', 'tags'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $tagIds = $request->input('tags');
        $jsonTagIds = json_encode($tagIds);
        $blog->tags = $jsonTagIds;

        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);
        
           
       
            $url = $request->image->store('uploads/images/blogs', 'public');
            $blog->image = $url ?? null;
        
         $blog->category_id = $request->category_id;
         
         $blog->slug = $blog->title;
         $blog->save();

         $blog->tags()->attach($request->input('tags'));
        return redirect()->route('blogs.index')->withSuccessMessage('Blog  have been created', 'Blog have been created');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $opciones = Category::pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $selectedOptions = $blog->tags()->pluck('tag_id')->toArray();
        return view('blogs.edit',compact('blog', 'opciones', 'tags', 'selectedOptions'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->blogTag()->delete();

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $tagIds = $request->input('tags');
        $jsonTagIds = json_encode($tagIds);
        $blog->tags = $jsonTagIds;
        if ($request->image) {

            if(File::exists(storage_path('app/public/'.$blog->image))){
                unlink(storage_path('app/public/'.$blog->image));
            }
       
            $url = $request->image->store('uploads/images/blogs', 'public');
            $blog->image = $url ?? null;
        }
        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
         ]);
         $blog->category_id = $request->category_id;
         
         $blog->slug = $blog->title;
         $blog->save();

         $blog->tags()->attach($request->input('tags'));
        return redirect()->route('blogs.index')->withSuccessMessage('Blog  have been updated', 'Blog have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(File::exists(storage_path('app/public/'.$blog->image))){
            unlink(storage_path('app/public/'.$blog->image));
        }
   
            $blog->delete();
            return redirect()->route('blogs.index')->withSuccessMessage('Blog  have been deleted', 'Blog have been deleted');
    }
    
}

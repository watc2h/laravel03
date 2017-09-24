<?php

namespace App\Http\Controllers;

use Session;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        
       $this->validate($request,[
                'title' => 'required',
                'featured' => 'required|image',
                'content' => 'required',
                //'category_id' =>'required',
                //'tags' =>'required'
                
            ]);
        
        $featured=$request->featured;
        $featured_new_name=time().$featured->getClientOriginalName();//symfony function
        $featured->move('uploads/posts/',$featured_new_name);
        
        //dd($request->all());
        
        //$post=new Post;
        
        $post=Post::create([
            'title' => $request->title,
            'content'=> $request->content,
            'featured' => 'uploads/posts/'.$featured_new_name,
            'category_id' => $request->category_id,
            //'slug' => str_slug($request->title)
            ]);
            
            
            
        //$post->tags()->attach($request->tags);
            
         Session::flash('success','Post created succesfully');
        
        
        return redirect()->back();
        
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

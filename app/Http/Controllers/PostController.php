<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PagesController;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = "SELECT * FROM posts";
        $posts = Post::all();
        // return $this->db->query($query)->result_array();
        return view('pages.home')->withPosts($posts);
    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'piclink' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
                'title' => 'required|max:140',
                'body' => 'required'
            )
        );
        // store in the db
        $post = new Post;
        $post->piclink = $request->piclink;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        // flash exists for one page request
        // put exists until the session is removed
        Session::flash('success', 'Post was saved');
        return redirect()->route('posts.index');
    }
    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }
    /**
     * Show the form for editing the specified resource. 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        $this->validate($request, array(
                'piclink' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
                'title' => 'required|max:140',
                'body' => 'required'
            ));
        // var_dump($request);
        // die();
        // save
        $post = Post::find($id);
        $post->piclink = $request->input('piclink');
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        // set flash message
        Session::flash('success','Post was successfully saved!');
        // redirect with flash data to pages.home
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

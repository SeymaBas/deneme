<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('Admin.index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->input('title');
        $content=$request->input('content');

        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->save();

        return redirect('/Admin')->with('mesaj', 'tamam');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);

        return view('Admin.duzenle')->with('post', $post);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->input('id');
        $title=$request->input('title');
        $content=$request->input('content');


        $post= Post::find($id);
        $post->title=$title;
        $post->content=$content;
        $post->save();

        return redirect('/Admin')->with('mesaj',"Yazi duzenlendi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yazi = Post::destroy($id);
        return redirect('/Admin')->with('mesaj', "Yaziyi sildin.");
    }
}

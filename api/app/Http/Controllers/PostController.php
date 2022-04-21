<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poste=Post::All();
        return $poste;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poste = new Post();
        $poste->title = $request->title;
        $poste->body = $request->body;
        $poste->category = $request->category;
        $poste->save();
        return response()->json($poste);
        // if(Post::create($request->all())){
        //     return response()->json([
        //         'success'=>'Post successfully created'
        //     ],200);
        // }
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
        $poste = Post::find($id);
        return $poste;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $poste = Post::find($request->id);
        $poste->title = $request->title;
        $poste->body = $request->body;
        $poste->category = $request->category;
        $poste->save();
        return response()->json($poste);
        // if(Post::update($request->all())){
        //     return response()->json([
        //         'success'=>'Post successfully updated'
        //     ],200);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poste = Post::find($id);
        $poste->delete();
        return $poste;
    }
}

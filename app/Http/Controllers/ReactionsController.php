<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class ReactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reaction::all();
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
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'reaction' => 'required',
        ]);

        $reaction = new Reaction([
            'user_id' => auth()->user()->id,
            'reaction' => $request->reaction,
        ]);

        return $post->reactions()->save($reaction);
    }

    public function commentReaction(Request $request, Comment $comment)
    {
        $this->validate($request, [
            'reaction' => 'required',
        ]);

        $reaction = new Reaction([
            'user_id' => auth()->user()->id,
            'reaction' => $request->reaction,
        ]);

        return $comment->reactions()->save($reaction);
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
        $this->validate($request, [
            'reaction' => 'required'
        ]);

        Reaction::where('id', $id)->update($request->all());

        return Reaction::find($id);
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

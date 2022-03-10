<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $posts = Post::all();

        return response()->json(['message' => 'HERE YOU GO!', 'data' => PostResource::collection($posts)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json(['message' => 'NICE SAVE!', 'data' => new PostResource($post)]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $post = Post::find($id);

        return response()->json(['message' => 'THIS IS YOUR DATA!', 'data' => new PostResource($post)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json(['message' => 'UY UPDATED!', 'data' => new PostResource($post)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return response()->json(['message' => 'Deleted']);
    }
}

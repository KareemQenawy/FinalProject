<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::get();
        // return "<h1>welcome to all posts</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return "<h1>welcome to all posts</h1>";
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $id)
    {
        dd($id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function test(){
        return "welcome from resource controller";
    }
}

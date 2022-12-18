<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Http\Requests\ValidateAnimeBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnimeBlogController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::all();

        return view('/home', [
            'animes' => $animes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animeblog.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateAnimeBlogRequest $request)
    {
        $request->validated();

        $anime_blog = Anime::create([
           'anime_title' => $request->input('anime_title'),
            'blog_title' => $request->input('blog_title'),
            'description' => $request->input('description'),
            'aired' => $request->input('aired'),
            'studio' => $request->input('studio')
        ]);

        return redirect('/');
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

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitCharacterRequest;
use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\AnimeCharacter;
use App\Models\Character;

class AnimeCharacterController extends Controller
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

        $animes = Anime::all();

        return view('character.anime_char', [
            'animes' => $animes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmitCharacterRequest $request)
    {

        $request->validated();

        $new_image_path_1 = time() . '-' . $request->name . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images'), $new_image_path_1);

        $new_image_path_2 = time() . '-' . $request->name . '.' . $request->image_path_2->extension();
        $request->image_path_2->move(public_path('images'), $new_image_path_2);

        $character = Character::create([
            'characters' => $request->input('characters'),
            'power_desc' => $request->input('power_desc'),
            'voice_actor' => $request->input('voice_actor'),
            'image_path' => $new_image_path_1,
            'image_path_2' => $new_image_path_2
        ]);
        if($character->save()) {
            $character_id = \DB::table('characters')
                ->select('id')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->value('id');

            AnimeCharacter::create([
                'anime_id' => $request->input('anime_title_id'),
                'character_id' => $character_id,
            ]);
            return redirect('/blog');
        }


//        if(save()) {
//            return redirect('/');
//        }
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

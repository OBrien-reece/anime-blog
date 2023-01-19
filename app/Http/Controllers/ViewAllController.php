<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class ViewAllController extends Controller
{
    public function show_ongoing() {

        $find_ongoing_anime = \DB::table('anime')
                               ->join('blog_information', 'anime.id', 'blog_information.anime_id')
                               ->select('anime.*', 'blog_information.*')
                               ->where('blog_information.status', 'Ongoing')
                               ->get();

        return view('showall_anime.ongoing_anime_blogs', [
            'ongoing_anime' =>  $find_ongoing_anime
        ]);
    }

    public function show_completed() {
        $find_completed_anime = \DB::table('anime')
                                 ->join('blog_information', 'anime.id', 'blog_information.anime_id')
                                 ->select('anime.*', 'blog_information.*')
                                 ->where('status', 'Completed')
                                 ->get();

        return view('showall_anime.completed_anime_blogs', [
            'completed_anime' => $find_completed_anime
        ]);
    }
}

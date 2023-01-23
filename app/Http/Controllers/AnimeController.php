<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUpdateBlogRequest;
use App\Models\User;
use App\Models\Anime;
use App\Models\BlogInfo;
use App\Models\ViewCounter;
use App\Models\Comment;
use App\Http\Requests\ValidateAnimeBlogRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AnimeController extends Controller
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

        $anime_blog_rankings = \DB::table('anime')
                   ->join('view_counter', 'anime.id', 'view_counter.anime_id')
                   ->join('blog_information', 'anime.id', 'blog_information.anime_id')
                   ->select('anime.*', 'blog_information.*')
                   ->orderByDesc('view_counter.view_counter')
                   ->get()
                   ->take(5);

        $ongoing_anime = \DB::table('anime')
                           ->join('blog_information', 'anime.id', '=', 'blog_information.anime_id')
                           ->select('anime.*', 'blog_information.status')
                           ->where('status', 'Ongoing')
                           ->orderByDesc('updated_at')
                           ->get()
                           ->take(8);

        $completed_anime = \DB::table('anime')
                            ->join('blog_information' , 'anime.id', 'blog_information.anime_id')
                            ->select('anime.*', 'blog_information.status')
                            ->where('status', 'Completed')
                            ->orderByDesc('updated_at')
                            ->get()
                            ->take(4);

//        dd($animes);

        return view('/home', [
            'ongoing_anime' => $ongoing_anime,
            'completed_anime' => $completed_anime,
            'blog_rankings' => $anime_blog_rankings
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

        $newFileName = '9anime' . '-' . time() . '.' . $request->anime_image_profile->extension();

        $request->anime_image_profile->move(public_path('images/anime_image_profile'), $newFileName);

        $anime_blog = Anime::create([
           'anime_title' => $request->input('anime_title'),
            'blog_title' => $request->input('blog_title'),
            'user_id' => auth()->user()->id,
            'description' => $request->input('description'),
            'anime_image_profile' => $newFileName,
            'slug' => Str::slug($request->input('blog_title')),
        ]);
        if($anime_blog->save()) {
            $anime_id = \DB::table('anime')
                ->select('id')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->value('id');

            BlogInfo::create([
                'type' => $request->input('animetype'),
                'status' => $request->input('anime_status'),
                'premiered' => $request->input('premiered'),
                'studio' => $request->input('studio'),
                'genre' => $request->input('genre'),
                'licensors' => $request->input('licensors'),
                'anime_id' => $anime_id
            ]);

            ViewCounter::create([
                'anime_id' => $anime_id
            ]);
        }



        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {

        $idn = $anime->id;
        $anime_id = ViewCounter::where('anime_id', $idn);
        ViewCounter::where('anime_id', $idn)->increment('view_counter', 1);

        $user = User::all();

        return view('animeblog.show-blog', [
            'anime' => $anime,
            'user' => $user
            /*'comments' => $comments*/
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        return view('animeblog.edit_blog', [
            'anime' => $anime
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(ValidateUpdateBlogRequest  $request, $id)
    {
        $request->validated();

        /*Update the details in the database by ID*/
        $update_data = Anime::findOrFail($id);

        if(!$update_data) {
            $update_data = new Anime;
        }

        $update_data->anime_title = $request->input('anime_title');
        $update_data->blog_title = $request->input('blog_title');
        $update_data->user_id = auth()->user()->id;
        $update_data->description = $request->input('description');
        $update_data->slug = Str::slug($request->input('blog_title'));


        /*Check if the user also wanted to update the image*/
        if($request->hasFile('anime_image_profile')) {

            $path_to_images = 'images/anime_image_profile/' . $update_data->anime_image_profile;

            if(File::exists($path_to_images)) {
                File::delete($path_to_images);
            }

            $new_file_name = '9anime' . '-' . time() . '-' . $request->name . '.' . $request->anime_image_profile->extension();

            $request->anime_image_profile->move(public_path('images/anime_image_profile'), $new_file_name);

            $update_data->anime_image_profile = $new_file_name;
        }

        if($update_data->save()) {
            $update__blog_info = BlogInfo::where('anime_id', $id)->first()->update([
                'type' => $request->input('animetype'),
                'status' => $request->input('anime_status'),
                'premiered' => $request->input('premiered'),
                'studio' => $request->input('studio'),
                'genre' => $request->input('genre'),
                'licensors' => $request->input('licensors'),
                'anime_id' => $id
            ]);
        }

        return redirect()->to('/blog/' . $update_data->slug)
            ->with('success', 'The changes to the blog have been registered successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_to_be_deleted = Anime::find($id);
        $data_to_be_deleted->delete();
        return redirect('/');
    }
}

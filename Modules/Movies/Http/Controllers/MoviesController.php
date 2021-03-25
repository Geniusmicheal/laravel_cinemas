<?php

namespace Modules\Movies\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Movies\Entities\Movie;

use Modules\Showtimes\Entities\Showtimes;
class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data=[
            'movie' => Movie::all()
        ];
        return view('welcome', $data);
    }

    public function showlist()
    {
        $data=[
            'movie' => Movie::all()
        ];
        return view('movies::index', $data);
    }
 
    public function create()
    {
        return view('movies::addmovies');
    }


    public function store(Request $request)
    {
       
        $request->validate([  
            'title'   => 'required|min:6',
            'genre' => 'required',
            'synopsis' => 'required|min:6',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $raw_slug = preg_replace("/[^a-zA-Z0-9\s]/", "", $request->title);
        $slug = str_replace(' ','-',$raw_slug);

        $movie = Movie::where('slug', '=', $slug)->first();
        if ($movie != null) return back()->with('error', 'This movie is existing');

        $image=$request->file('img');
        $file_name=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path()."/upload/" , $file_name);

        Movie::create([
            'title' =>  $request->title,
            'slug' => $slug,
            'genre' => $request->genre,
            'synopsis' => $request->synopsis,
            'img' => $file_name
        ]);

        return redirect()->route('addmovie')->with('success','Movie successfully Upload!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $movie= Movie::where('slug','=',$id)->first();

        $showtime= Showtimes::where('movie','=',$movie->movies_id)
            ->leftJoin('cinemas', 'showtime.location', '=', 'cinemas.cinema_id')
                ->orderBy('location','asc')->orderBy('showtime','asc')->get();
// dd($showtime);
                $data=[
                    'movie' => $movie,
                    'showtime' => $showtime
                ];
        return view('movies::show',  $data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('movies::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}

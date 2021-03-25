<?php

namespace Modules\Showtimes\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Cinemas\Entities\Cinemas;
use Modules\Movies\Entities\Movie;
use Modules\Showtimes\Entities\Showtimes;

class ShowtimesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('showtimes::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data=[
            'movie' => Movie::all(),
            'location' => Cinemas::all()
        ];
        return view('showtimes::index', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([  
            'movie'   => 'required',
            'locations' => 'required',
            'showtime' => 'required',
        ]);

        Showtimes::create([
            'movie' =>  $request->movie,
            'location' => $request->locations,
            'showtime' => $request->showtime,
        ]);

        return redirect()->route('addshowtime')->with('success','Cinemas showtime successfully created!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('showtimes::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('showtimes::edit');
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

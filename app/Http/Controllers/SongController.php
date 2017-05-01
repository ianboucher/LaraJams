<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display all Songs.
     *
     * @return Response
     */
    public function index()
    {
        return Song::with('album')->get();
    }

    /**
     * Display the specified Song.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $song = Song::find($id);
        return $song->with('album')->get();
    }
}

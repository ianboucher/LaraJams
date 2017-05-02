<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

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
        return Song::find($id)->with('album');
    }
}

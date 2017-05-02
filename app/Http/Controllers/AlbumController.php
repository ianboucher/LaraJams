<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    /**
     * Display all Albums.
     *
     * @return Response
     */
    public function index()
    {
        return Album::with('songs')->get();
    }

    /**
     * Display the specified Album.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Album::with('songs', 'songs.album')->find($id);
    }
}

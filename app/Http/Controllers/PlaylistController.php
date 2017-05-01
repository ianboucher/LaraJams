<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;
use App\User;

class PlaylistController extends Controller
{
    /**
     * Display all Songs.
     *
     * @return Response
     */
    public function index()
    {
        return Playlist::with('songs')->get();
    }

    /**
     * Display the specified Song.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Playlist::find($id)->load('songs');
    }

    /**
     * Store a newly created 'Session' in storage.
     *
     * @param  Request  $request
     * @param  int $userId
     * @return Response
     */
    public function store(Request $request, $userId)
    {
        $user      = User::findOrFail($userId);
        $playlist  = $user->playlists()->create([
            'name' => $request->input('playlist.name'),
            'description' => $request->input('playlist.description')
        ]);

        $playlist->save();
        return response()->json($playlist);
    }
}

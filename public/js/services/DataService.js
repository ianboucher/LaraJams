(function()
{
    "use strict";

    angular
        .module("blocJams")
        .service("DataService", [
            "$http",

            function DataService($http)
            {
                var self = this;

                self.getCollection = function()
                {
                    return $http.get("/api/v1.0.0/albums");
                };

                self.getAlbum = function(id)
                {
                    return $http.get("/api/v1.0.0/albums/" + id);
                }

                self.getSongs = function()
                {
                    return $http.get("/api/v1.0.0/songs");
                };

                self.getSong = function(id)
                {
                    return $http.get("/api/v1.0.0/songs/" + id);
                }

                self.getPlaylists = function()
                {
                    return $http.get("/api/v1.0.0/playlists");
                };

                self.getPlaylist = function(id)
                {
                    return $http.get("/api/v1.0.0/playlists/" + id);
                }

                self.newPlaylist = function(name, description)
                {
                    return $http.post("/api/v1.0.0/playlists", {
                        "name"        : name,
                        "description" : description
                    });
                }

                self.newPlaylisting = function(playlist, song)
                {
                    return $http.post("/api/v1.0.0/playlistings", {
                        "playlist_id" : playlist,
                        "song_id"     : song
                    });
                }

                self.removePlaylisting = function(playlist, song)
                {
                    // ng seems to require this format of http request to work
                    // with Rails singular resource
                    return $http(
                    {
                        "method" : "DELETE",
                        "url"    : "/api/v1.0.0/playlistings",
                        "params" : {"playlist_id" : playlist, "song_id" : song}
                    });
                }

                return self;
            }
        ])
})();

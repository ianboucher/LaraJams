angular
    .module("blocJams", ["ui.router"])
    .config(function ($stateProvider, $locationProvider)
    {
        $locationProvider
            .html5Mode
            ({
                "enabled": true,
                "requireBase": false
            });

        $stateProvider
            .state
            (
                "landing",
                {
                    "url"         : "/",
                    "controller"  : "LandingCtrl as landing",
                    "templateUrl" : "js/templates/landing.html"
                }
            )
            .state
            (
                "collection",
                {
                    "url"         : "/collection",
                    "controller"  : "CollectionCtrl as collection",
                    "templateUrl" : "js/templates/collection.html"
                }
            )
            .state
            (
                "album",
                {
                    "url"         : "/album/:id",
                    "controller"  : "AlbumCtrl as album",
                    "templateUrl" : "js/templates/album.html"
                }
            )
            .state
            (
                "songlist",
                {
                    "url"         : "/songlist",
                    "controller"  : "SongsCtrl as songlist",
                    "templateUrl" : "js/templates/songs.html"
                }
            )
            .state
            (
                "playlistIndex",
                {
                    "url"         : "/playlist/index",
                    "controller"  : "PlaylistsCtrl as playlists",
                    "templateUrl" : "js/templates/playlist_index.html"
                }
            )
            .state
            (
                "newPlaylist",
                {
                    "url"         : "/new_playlist/",
                    "controller"  : "NewPlaylistCtrl as newPlaylist",
                    "templateUrl" : "js/templates/playlist_new.html"
                }
            )
            .state
            (
                "playlist",
                {
                    "url"         : "/playlist/:id",
                    "controller"  : "PlaylistCtrl as playlist",
                    "templateUrl" : "js/templates/playlist.html"
                }
            )
            .state
            (
                "playlistings",
                {
                    "url"         : "/playlist/:id/songs",
                    "controller"  : "PlaylistingCtrl as playlisting",
                    "templateUrl" : "js/templates/playlistings.html"
                }
            )
            .state
            (
                "login",
                {
                    "url"         : "/login",
                    "controller"  : "AuthCtrl as auth",
                    "templateUrl" : "js/templates/login.html"
                }
            )
            .state
            (
                "register",
                {
                    "url"         : "/register",
                    "controller"  : "AuthCtrl as auth",
                    "templateUrl" : "js/templates/register.html"
                }
            )
    });

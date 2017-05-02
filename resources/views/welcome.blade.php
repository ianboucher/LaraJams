<!DOCTYPE html>
<html ng-app="blocJams">

<head>
    <title>Larajams</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../favicon.ico">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300">
    <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/landing.css">
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
    <link rel="stylesheet" type="text/css" href="/css/album.css">
    <link rel="stylesheet" type="text/css" href="/css/collection.css">
    <link rel="stylesheet" type="text/css" href="/css/forms.css">
    <link rel="stylesheet" type="text/css" href="/css/player_bar.css">
    <link rel="stylesheet" type="text/css" href="/css/playlists.css">
    <link rel="stylesheet" type="text/css" href="/css/songs.css">

</head>

<body>

    <!-- INJECT THE ANGULAR TEMPLATES -->
    <ui-view></ui-view>


    <!-- APPLICATION DEPENDENCIES -->
    <!-- TODO: Consider loading dependencies from 'node_modules' folder? -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.min.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/satellizer/0.15.5/satellizer.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/buzz/1.2.0/buzz.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bean/1.0.15/bean.min.js"></script>


    <!-- APPLICATION SCRIPTS -->

    <!-- Bootstrapping -->
    <script src="/js/app.js"></script>

    <!-- Services -->
    <script src="/js/services/DataService.js"></script>
    <script src="/js/services/SongPlayer.js"></script>

    <!-- Directives -->
    <script src="/js/directives/seekBar.js"></script>

    <!-- Filters -->
    <script src="/js/filters/timecode.js"></script>

    <!-- Controllers -->
    <script src="/js/controllers/AlbumCtrl.js"></script>
    <script src="/js/controllers/AuthCtrl.js"></script>
    <script src="/js/controllers/CollectionCtrl.js"></script>
    <script src="/js/controllers/LandingCtrl.js"></script>
    <script src="/js/controllers/NavCtrl.js"></script>
    <script src="/js/controllers/NewPlaylistCtrl.js"></script>
    <script src="/js/controllers/PlayerBarCtrl.js"></script>
    <script src="/js/controllers/PlaylistCtrl.js"></script>
    <script src="/js/controllers/PlaylistsCtrl.js"></script>
    <script src="/js/controllers/SongsCtrl.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Php_Ajax_Dischi_Two</title>
</head>
<body>
    <div id="root">
        <h1>My Playlist_Vue</h1>
        <div class="wrapper">
            <div v-for="song in playlist" class="album">
            <img :src="song.poster" alt="">
                <h4>{{song.title}}</h4>
                <span>{{song.author}}</span>
                <span>{{song.genre}}</span>
                <span>{{song.year}}</span>
            </div>            
        </div>
    </div>
    <script src="scripts/app.js"></script>
</body>
</html>
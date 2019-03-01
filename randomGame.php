<html lang="en-GB">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/xamppPhpCss.css" />
</head>

<body>

    <div id="menu">
        <div class="custom-select">
            <select id="diffSelect">
                <option value="10">Easy</option>
                <option value="15">Medium</option>
                <option value="25">Hard</option>
                <option value="38">Extreme</option>
            </select>
        </div>
        <input id="startMazeBtn" type="button" onclick="makeMaze()" value="Start" />
       
    </div>
    <div id="view">
        <div id="mazeContainer">
            <center> <canvas id="mazeCanvas" class="border" height="1100" width="1100"></canvas></center>
        </div>
    </div>
    </div>
    <p class="message"><a href="/collegeFinal.php">back to last page</a></p>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>

    <script src="randomGame.js">
    </script>
</body>

</html>
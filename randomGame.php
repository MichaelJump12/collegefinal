<html lang="en-GB">

<head>
    <link rel="stylesheet" href="assets/css/randomGame.css" />
</head>
<meta charset="utf-8">

<body>
    
    <div id="gradient"></div>
    <div id="page">
   
        <div id="Message-Container">
            <div id="message">
                <h1>Congratulations!</h1>
                <p>You are done.</p>
                <p id="moves"></p>
                <p id="time"></p>
                <input id="okBtn" type="button" onclick="toggleVisablity('Message-Container')" value="Cool!" />
            </div>
        </div>
        <div id="menu">
            <div class="custom-select">
                <select id="diffSelect">
                    <option value="10">Easy</option>
                    <option value="15">Medium</option>
                    <option value="25">Hard</option>
                    <option value="38">Extreme</option>
                </select>
            </div>
            <input id="startClock" type="button" onclick="makeMaze()" value="Start" />
            <input id="resetClock" type="button" data-reset='resetClock' onclick="makeMaze()" value="Reset" />

            <span id="count">0</span> seconds
        </div>
        <div id="view">
            <div id="mazeContainer">
                <canvas id="mazeCanvas" class="border" height="1100" width="1100"></canvas>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    <script src="randomGame.js">
    </script>
</body>

</html>
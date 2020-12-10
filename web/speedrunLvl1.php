<?php
    require 'header.php'
?>
<link rel="stylesheet" href="css/gameMain.css">
<center>
<div class="header">
    <div class="headder"><h2>SpeedRun level 1</h2></div>
    <div class="paragraf"><h4>Collect all keys to open the teleporter</h4></div>
    <div class="paragraf"><h4>As fast as possible</h4></div>
    <div id="win-msg"></div>
</div>
<canvas width="500" height="500" id="canvas"></canvas>
<div id="points"></div>
<div id="safeTimer">
    <h4>Time to complete level</h4>
    <h4 id="safeTimerDisplay"></h4>
    <h4 id="displayDiv"></h4>
</div>  
<div>
    <button class="btn btn-primary btn-lg mx-2" id="knap">Reset</button>
    <a href="speedrunLvl2.php"><button class="btn btn-primary btn-lg mx-2 disabled" id="nextLevel">Next level</button></a>
</div>

</center>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <img src="img/player.png" style="display: none;">
    <img src="img/road.png" style="display: none;">
    <img src="img/wall.png" style="display: none;">
    <img src="img/goal1.png" style="display: none;">
    <img src="img/goal2.png" style="display: none;">
    <audio id="dead" src="gameSound/death.mp3" preload="auto"></audio>
    <audio id="walk" src="gameSound/walk.mp3" preload="auto"></audio>

<?php
    require "footer.php"
?>
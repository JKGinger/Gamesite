<?php
    require "header.php";
    
?>

<main>
    <div class="container-fluid">
       <div class="row mt-3 mx-2 mx-md-0">
            <div class="col-md-5 offset-md-1 box-white px-2">
                <div>
                    <h3 class="text-main-color"><ins>Newest Added Games</ins></h3>
                </div>
                <div>
                    <img src="img/speedrunLogo.png" alt="speedrunLogo" class="img-fluid">
                    <h4>Speedrun</h4>
                </div>
                <div class="pt-1">
                    <p>SpeedRun is a speed maze solver game, test your skill in finding the fastest path and get the fastest time.</p>
                </div>
                <div>
                    <a href="speedrunLvl1.php?user=<?php echo $_SESSION['userUid']; ?>" class="btn btn-info btn-md mb-2"><b>Try it out</b></a>
                </div>
            </div>

            <div class="col-md-5 h-100 box-white px-2 mt-2 mt-md-0 ml-0 ml-md-5">
                <div>
                    <h3 class="text-main-color"><ins>Other Games</ins></h3>
                </div>
                <div class="list-group-item mb-1 box-white border-top-0 border-right-0 border-left-0">
                    <div>
                        <img src="img/virtualWorldLogo.png" alt="virtualWorldLogo" class="img-fluid" id="VWL-img">
                        <h4>Virtual World</h4>
                    </div>
                    <div class="pt-1">
                        <p>A world made in the Unity game engine. Experience a virtual car shop, restaurant, and zoo.</p>
                    </div>
                    <div>
                        <a href="virtualWorld.php?user=<?php echo $_SESSION['userUid']; ?>" class="btn btn-info btn-md mb-2"><b>Try it out</b></a>
                    </div>
                </div>

                <div class="list-group-item mb-1 box-white border-top-0 border-right-0 border-left-0">
                    <div>
                        <img src="img/vue_drums.png" alt="vue_drums" class="img-fluid" id="VWL-img">
                        <h4>Vue Drums</h4>
                    </div>
                    <div class="pt-1">
                        <p>Pretend to be the drummer in your favorite band with this Vue.js drum set. Use your keyboard or just press the images, to play a sound.</p>
                    </div>
                    <div>
                        <a href="vueDrums.php?user=<?php echo $_SESSION['userUid']; ?>" class="btn btn-info btn-md mb-2"><b>Try it out</b></a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

</main>

<?php
    require "footer.php"
?>
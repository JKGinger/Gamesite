<?php
    require "header.php"
?>

<main>
  <div class="container">
    <div class="row justify-content-center align-items-center ">
      <div class="card col-lg mx-5 mt-3 px-2 box-white" style="width: 28rem;">
        <h2 class="text-center text-main-color">Latest Game</h2>
        <img class="card-img-top mt-2" src="img/speedrunLogo.png" alt="Card image cap">
        <div class="card-body">
         <h5 class="card-title">SpeedRun</h5>
          <p class="card-text">JavaScript maze game, see how fast you can collect all the coins and get to the teleporter.</p>
          <a href="SpeedrunLvl1.php?user=<?php echo $_SESSION['userUid']; ?>" class="btn btn-info btn-md">Go to SuperFast</a>
        </div>
      </div>
    </div>
<!-- LATEST GAME ROW END -->

    <div class="row justify-content-center align-items-center">

          <div class="card col-lg mx-5 mt-3 px-2 box-white" style="width: 28rem;">
        <img class="card-img-top mt-2" src="img/virtualWorldLogo.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Virtual World</h5>
            <p class="card-text">A world made in the Unity game engine. Experience a virtual car shop, restaurant, and zoo.</p>
            <br>
            <a href="virtualWorld.php?user=<?php echo $_SESSION['userUid']; ?>" class="btn btn-info btn-md">Go to Virual World</a>
          </div>
      </div>

      <div class="card col-lg mx-5 mt-3 px-2 box-white" style="width: 28rem;">
        <img class="card-img-top mt-2" src="img/vue_drums.png" alt="Card image cap">
        <div class="card-body">
         <h5 class="card-title">Vue.js drums</h5>
          <p class="card-text">Pretend to be the drummer in your favorite band with this Vue.js drum set. Use your keyboard or just press the images, to play a sound.</p>
          <a href="vueDrums.php?user=<?php echo $_SESSION['userUid']; ?>" class="btn btn-info btn-md">Go to Vue.js Drums</a>
        </div>
      </div>
  </div>
<!-- FIRST ROW END -->


</main>

<?php
    require "footer.php"
?>
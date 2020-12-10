<?php
    require "header.php"
?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    
    <center>
        <div id="Drum_app">
            
                <h3>type you name:</h3>
                <input type="text" v-model="name">
                <h1>Welcome to {{(name)}}'s live show</h1>
                <h3>Use A,S,D,F,G,H,J for sounds</h3>
                <div class="drums">
                <button @click.prevent="playSound('gameSound/sounds/snare.mp3')" class="drums_img"><img src="img/drums/snare.png" alt=""></button>
                <button @click.prevent="playSound('gameSound/sounds/tom-3.mp3')" class="drums_img"><img src="img/drums/tom3.png" alt=""></button>
                <button @click.prevent="playSound('gameSound/sounds/tom-1.mp3')" class="drums_img"><img src="img/drums/tom1.png" alt=""></button>
                <button @click.prevent="playSound('gameSound/sounds/kick-bass.mp3')" class="drums_img"><img src="img/drums/kick.png" alt=""></button>
                <button @click.prevent="playSound('gameSound/sounds/tom-2.mp3')" class="drums_img"><img src="img/drums/tom2.png" alt=""></button>
                <button @click.prevent="playSound('gameSound/sounds/tom-4.mp3')" class="drums_img"><img src="img/drums/tom4.png" alt=""></button>
                <button @click.prevent="playSound('gameSound/sounds/crash.mp3')" class="drums_img"><img src="img/drums/crash.png" alt=""></button>
            </div>


        </div>
    </center>
    <script src="js/drums.js"></script>
<?php
    require "footer.php"
?>
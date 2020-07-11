<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tushar Choudhary</title>
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300,400|Open+Sans:300,400&display=swap&subset=japanese,latin-ext" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="links"><a href="https://www.npmjs.com/package/glitched-writer"><svg id="npm" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 780 250" style="enable-background:new 0 0 780 250;" xml:space="preserve"><path class="st0" d="M240,250h100v-50h100V0H240V250z M340,50h50v100h-50V50z M480,0v200h100V50h50v150h50V50h50v150h50V0H480z					M0,200h100V50h50v150h50V0H0V200z"></path></svg></a></div>
<div
  class="log" id="logs">
  <p>Welcome</p>
  </div>
  <div class="text" id="glitch_this">Welcome</div><input class="input" id="input" placeholder="$" autocomplete="off" disabled="">
  <div class="input--shadow"></div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/glitched-writer@1.3.0/glitchedWriter-codepen.js'></script><script  src="./script.js"></script>

<audio id="audioplayer"> <!-- Remove the "Controls" Attribute if you don't want the visual controls -->
</audio>

  <script>
    var video = document.getElementById("audio-example");
    
    function toggleControls() {
      if (video.hasAttribute("controls")) {
         video.removeAttribute("controls")   
      } else {
         video.setAttribute("controls","controls")   
      }
    }
    </script>

<script type="text/javascript">
  // # of images
  var imgCount = 6;
  // random the images
  var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
  // array of images & file name
  var images = new Array
          images[1] = "https://media.giphy.com/media/pVGsAWjzvXcZW4ZBTE/giphy.gif",
          images[2] = "https://media.giphy.com/media/g8NiStusF8RGM/giphy.gif",
          images[3] = "https://media.giphy.com/media/aQQnxXlg8R0CQ/giphy.gif",
          images[4] = "https://media.giphy.com/media/fz7FVqfbPrTqw/giphy.gif";
          images[5] = "https://media.giphy.com/media/vC61t2H4a114I/giphy.gif";
          images[6] = "https://media.giphy.com/media/cbcrUm3U1Fj0I/giphy.gif";
  document.body.style.backgroundImage = "url(" + images[randomCount] + ")";
</script>

<script>
  var lastSong = null;
  var selection = null;
  var playlist = ["sounds/FamousDex.mp3", "sounds/GhostFree.mp3", "sounds/Hiroshima.mp3", "sounds/NextLevel.mp3", "sounds/Savage2018.mp3"]; // List of Songs
  var player = document.getElementById("audioplayer"); // Get Audio Element
  player.autoplay=true;
  player.addEventListener("ended", selectRandom); // Run function when song ends

  function selectRandom(){
      while(selection == lastSong){ // Repeat until different song is selected
          selection = Math.floor(Math.random() * playlist.length);
      }
      lastSong = selection; // Remember last song
      player.src = playlist[selection]; // Tell HTML the location of the new Song

  }

  selectRandom(); // Select initial song
  player.play(); // Start Song
</script>

</body>
</html>

<!--

BASIC INFO:

g1 - normal genshin font
g2 - special genshin font

-->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="w3.css">
	<style>

			@font-face { font-family: g1; src: url('genshin1.ttf'); }
			@font-face { font-family: g2; src: url('genshin2.ttf'); }

			.g1{
				font-family: g1;
			}

			.g2{
				font-family: g2;
			}

		

			.main{
				color: white;
				font-size: 130%;
			}

			

		body{
			background-color: #36393e;
			font-family: g1;
			color: #b6b6b6;
			user-select: none;
		}

		.mainText {
			padding-top: 160px;
			padding-left: 50px;
		}

#background-video-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -3; 
}

#background-video {
  min-width: 100%;
  min-height: 100%;
  object-fit: cover; 
}


.background-video-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
}

.background-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

main {
    position: relative;
    z-index: 1; /* Ensure main content is above the video */
}
.header{
			background-color: #1e2124!important;
			color: #b6b6b6;
			box-shadow: 0px 10px 10px 5px #282b30;
			}
	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Genshin Stats Forum</title>
</head>
<body class="w3-animate-opacity">
<div class="background-video-container w3-hide" id="video">
        <video id="backgroundVideo" class="background-video" muted autoplay loop playsinline>
            <source src="video.mp4" type="video/mp4">
            
        </video>
    </div>
<div class="w3-container header ">
  <h1 onclick="window.location.href='frontend.php'" class="g2 header-text"><g class="main">GFC&nbsp;&nbsp;</g>forum
<g class="drop g1">&nbsp;&nbsp;&nbsp;&nbsp;
<div class="w3-dropdown-hover w3-display-topright" style="font-size: 70%; margin-top: 20px; margin-right: 100px;">
  <button onhover="drpAn()" class="w3-button w3-gray w3-hover-gray"><g style="color: white;"><a href="frontend.php" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Menu</a></g></button>
  <div id="none" class="w3-dropdown-content w3-bar-block w3-animate-zoom">
    <a href="account.php" class="w3-bar-item w3-button">Account</a>
    <a href="calculator - copy.php" class="w3-bar-item w3-button">Calculator</a>
    <a href="faq.php" class="w3-bar-item w3-button">FAQ</a>
    <a href="users.php" class="w3-bar-item w3-button">Users</a>
  </div>
</g>
</h1>
</div>

</div>
<div class="mainText">
<h1 class="g1" style="color: white;">This page is purely fan project made for school 🚧</h1>
<h4 class="g1" style="padding-left: 5px;">all calculations are based of own algorithm, check FAQ for more info</h4>
</div>



<img class="w3-display-bottomright w3-third" src="xiao.png">

<script>

	console.log("do konzole se neleze lidem 🤓☝");
	
	
const video = document.getElementById('backgroundVideo');

function unMute() {
	 if (video.muted) {
        video.muted = false;
        video.play();
    }
}

document.body.addEventListener('click', function() {
    
    if (video.muted) {
        video.muted = false;
        video.play();
    }
});


	function drpAn() {
  var x = document.getElementById("none");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

var nahoda = 10;

function showVideo() {
  if (Math.random() * 100 <= nahoda) { 
    document.getElementById("video").classList.remove("w3-hide");
	  
  }
}

showVideo();


</script>
</body>
</html>

<!--

info for calc:

if cr<40 = you need crit rate artifacts now.

if CR<65 and CD<120 = both of your crit stats are low, consider upgrading your artifacts

if CR<65 and CD>120 = your crit rate could be higher

if CR<65 and CD>160 = your crit rate is really low, consider upgrading your artifacts

if CR>65 and CD<120 = your crit damage is low, considering upgrading your artifacts

if CR>65 and CD>120 = nice, could have been better tho

if CR>80 and CD>180 = fantastic build

-->
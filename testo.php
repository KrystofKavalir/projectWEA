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

		.header{
			background-color: #1e2124;
			color: #b6b6b6;
			box-shadow: 0px 10px 10px 5px #282b30;
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
			padding-top: 60px;
			padding-left: 50px;
		}

		.damn {
			margin-right: 10%;
		}

		.texto {
			color: white;
			font-size: 135%;
		}

		.extra {
			font-size: 170%;
		}

	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Genshin Stats Forum</title>
</head>
<body class="w3-animate-opacity">

<div class="w3-container header ">
  <h1 onclick="window.location.href='frontend.php'" class="g2 header-text"><g class="main">GFC&nbsp;&nbsp;</g>forum
<g class="drop g1">&nbsp;&nbsp;&nbsp;&nbsp;
<div class="w3-dropdown-hover w3-display-topright" style="font-size: 70%; margin-top: 20px; margin-right: 100px;">
  <button onhover="drpAn()" class="w3-button w3-gray w3-hover-gray"><g style="color: white;"><a href="frontend.php" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Menu</a></g></button>
  <div id="none" class="w3-dropdown-content w3-bar-block w3-animate-zoom">
    <a href="account.php" class="w3-bar-item w3-button">Account</a>
    <a href="calculator - copy.php" class="w3-bar-item w3-button">Calculator</a>
    <a href="faq.php" class="w3-bar-item w3-button"><b>FAQ</b></a>
    <a href="users.php" class="w3-bar-item w3-button">Users</a>
  </div>
</g>
</h1>
</div>

</div>
<div class="mainText">
<h1 class="g2" style="color: white;">FAQ</h1>
</div>

 <p id="message"></p>



<script>

	

	console.log("Xiao is the best twink ever <3");
	

	function drpAn() {
  var x = document.getElementById("none");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

const messageElement = document.getElementById('message');


fetch('datas.php')
  .then(response => response.json())
  .then(data => {
    data.forEach(account => {
      console.log(`Nickname: ${account.nickname}, Password: ${account.password}, Bio: ${account.bio}, UID: ${account.UID}, pfp: ${account.pfp}`);
    });
  });


</script>



</body>
</html>
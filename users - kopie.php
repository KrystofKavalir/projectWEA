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
::-webkit-scrollbar {
    display: none;
}
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
			height: 100%;
   overflow-y: hidden;
   

		}

		.no-scroll {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
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

				#grid-container {
			width: 80%; 
			padding-left: 50px;
    }

    .grid-item {
    	width: 18%;
    	height: 30%;
      border: 1px solid #b6b6b6; 
      padding: 10px; 
      margin: 5px; 
      text-align: center; 
      display: inline-grid;
      color: white;
      border-radius: 10px;
      box-shadow: 0 0 115px 5px #171a1d, inset 0 0 115px 5px #171a1d;
      text-shadow: 0 0 10px white;

    }

     .grid-item img {
      width: 100%;
      height: auto;
    }

    .nick {
    	font-family: g2;
    	font-size: 130%;
    }

    .uid {
    	width: 750%;
    	
    	background-color: white;
    	color: black;
    	border-radius: 8px;
    	cursor: pointer;"
    }

    .bio {
    	font-size: 80%;
    	font-weight: lighter;
    }

    .log {
    	filter: blur(8px);
    }



    .loge {
    	font-size: 350%;
  box-shadow: 0 0 0 0 transparent;
 
    animation: pulse-orange 2s infinite;

}



@keyframes pulse-orange {
  0% { text-shadow: 0 0  25px transparent; }
  50% { text-shadow: 0  0 25px white; }
  100% { text-shadow: 0  0 25px transparent; }
}

	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Genshin Stats Forum</title>
</head>
<body class="w3-animate-opacity no-scroll" id="body">

<div class="w3-container header ">
  <h1 onclick="window.location.href='frontend.php'" class="g2 header-text"><g class="main">GFC&nbsp;&nbsp;</g>forum
<g class="drop g1">&nbsp;&nbsp;&nbsp;&nbsp;
<div class="w3-dropdown-hover w3-display-topright" style="font-size: 70%; margin-top: 20px; margin-right: 100px;">
  <button onhover="drpAn()" class="w3-button w3-gray w3-hover-gray"><g style="color: white;"><a href="frontend.php" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Menu</a></g></button>
  <div id="none" class="w3-dropdown-content w3-bar-block w3-animate-zoom">
    <a href="account.php" class="w3-bar-item w3-button">Account</a>
    <a href="calculator - copy.php" class="w3-bar-item w3-button">Calculator</a>
    <a href="faq.php" class="w3-bar-item w3-button">FAQ</a>
    <a href="users.php" class="w3-bar-item w3-button"><b>Users</b></a>
  </div>
</g>
</h1>
</div>
</div>

<div class="log" id="block">
<div class="mainText">
<h1 class="g2" style="color: white;">Users</h1>
</div>
<div id="grid-container" class="g1"></div>
</div>
<h1 id="loge" class="g1 w3-display-middle loge w3-show" onclick="window.location.href='account.php'">PLEASE LOGIN FIRST</h1>

<script>

	console.log("do konzole se neleze lidem 🤓☝");
	
	var registered = localStorage.getItem("registered") === "true";
	
	if (registered === true) {
  document.getElementById("body").classList.remove("no-scroll");
  document.getElementById("loge").classList.remove("w3-show");
  document.getElementById("loge").classList.add("w3-hide");
  document.getElementById("block").classList.remove("log");
  console.log("welcome");
} else {
  console.log("register please");
  
}


	function drpAn() {
  var x = document.getElementById("none");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

	const gridContainer = document.getElementById('grid-container');

const preFilledData = {
  nickname: 'User Data',
  pfp: 'xiao.png', 
  uid: '88888888',
  bio: 'My very beatiful bio as genshin no lifer',
};

function generateGridItem(data) {
  const item = document.createElement('div');
  item.classList.add('grid-item');

  const img = document.createElement('img');
  img.src = data.pfp;
  item.appendChild(img);

  const info = document.createElement('div');
  info.innerHTML = `
    <p class="nick" onclick="goToData('users')">${data.nickname}</p>
    <p>UID: <g class="uid" id="uid">&nbsp;#${data.uid}&nbsp;&nbsp;</g></p>
    <p class="bio">${data.bio}</p>
  `;
  item.appendChild(info);

  return item;
}

for (let i = 0; i < 50; i++) {
  const gridItem = generateGridItem(preFilledData);
  gridContainer.appendChild(gridItem);
}

function goToData(currentPage) {
  localStorage.setItem("previousPage", currentPage); 
  window.location.href = "data.php"; 
}

const items = document.querySelectorAll("#uid");

items.forEach(item => {
  item.addEventListener("click", function() {
  	if (registered === true) {
    const uid = this.id;
    navigator.clipboard.writeText(uid)
      .then(() => {
        alert("UID " + "" + " was copied to your clipboard.");
      })
      .catch(err => {
        console.error("Failed to copy UID:", err);
      });
    } else {}
  });
});
</script>
</body>
</html>
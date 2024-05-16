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
			padding-left: 70px;

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

	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Genshin Stats Forum</title>
</head>
<body class="w3-animate-opacity" id="body">

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

<div class="history w3-hide"></div>
<div class="mainText" onclick="back(); goBack()">
<h1 class="g2" style="color: white;">←back</h1>
</div>
<div id="grid-container" class="g1"></div>
<script>

	console.log("do konzole se neleze lidem 🤓☝");

var registered = localStorage.getItem("registered") === "true";
	
	if (registered === true) {
  
  console.log("welcome");
  
} else {
  console.log("register please");
  window.location.href = "account.php";
}
	generateRandomData();

	function drpAn() {
  var x = document.getElementById("none");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function goBack() {
  const previousPage = localStorage.getItem("previousPage");
  if (previousPage) {
    window.location.href = previousPage + ".php"; // Add ".html" extension
    localStorage.removeItem("previousPage"); // Clear storage after use
  } else {
    // Handle no previous page scenario (optional)
    alert("There's no previous page to go back to.");
  }
}


// HERE I USED AI BUT WE WILL DELETE THIS SHIT AND USE DATABASE DATA INSTEAD.

function generateRandomData() {
  const data = [];
  for (let i = 0; i < 100; i++) {
    // Generate random values
    const randomDate = new Date(Date.now() - Math.floor(Math.random() * 86400000) * 90); // 3 months in milliseconds
    const avgDmg = Math.floor(Math.random() * (15000 - 1500)) + 1500;
    const dmgPer100 = avgDmg * 100;
    const maxDmg = Math.floor(avgDmg * 1.25);
    const minDmg = Math.floor(avgDmg * 0.75);

    // Create data object
    data.push({
      "date-calculated": randomDate.toLocaleDateString(),
      avgDmg,
      dmgPer100,
      maxDmg,
      minDmg,
    });
  }
  return data;
}

const randomData = generateRandomData();
console.log(randomData);

// Get the grid container element
const gridContainer = document.getElementById("grid-container");

// Loop through data and create grid items
randomData.forEach((item) => {
  const gridItem = document.createElement("div");
  gridItem.classList.add("grid-item");

  // Format and display data within grid item
  gridItem.innerHTML = `
    <p>Date: ${item["date-calculated"]}</p>
    <p>Avg Dmg: ${item.avgDmg}</p>
    <p>Dmg Per 100: ${item.dmgPer100}</p>
    <p>Max Dmg: ${item.maxDmg}</p>
    <p>Min Dmg: ${item.minDmg}</p>
  `;

  gridContainer.appendChild(gridItem);
});

function back() {
	//window.location.href = "account.php";
	
}




</script>
</body>
</html>
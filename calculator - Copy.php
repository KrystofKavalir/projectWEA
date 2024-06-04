<!--

BASIC INFO:

g1 - normal genshin font
g2 - special genshin font

-->
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" href="w3.css">
	<style>

		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
  		-webkit-appearance: none; 
  		margin: 0; 
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
.log {
      filter: blur(8px);
    }
        .loge {
      font-size: 350%;
  box-shadow: 0 0 0 0 transparent;
 
    animation: pulse-orange 2s infinite;

}

		.mainText {
			padding-top: 160px;
			padding-left: 50px;
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
    <a href="calculator - copy.php" class="w3-bar-item w3-button"><b>Calculator</b></a>
    <a href="faq.php" class="w3-bar-item w3-button">FAQ</a>
    <a href="users.php" class="w3-bar-item w3-button">Users</a>
  </div>
</g>
</h1>
</div>
<br>
<div class="log" id="block">
 

    <div class="calc">
      <div class="input-group">
        <label for="baseAtk">Base ATK:</label>
        <input type="number" id="baseAtk" />
      </div>
      <div class="input-group">
        <label for="extraAtk" style="color: #9CD433;">Extra ATK:</label>
        <input type="number" id="extraAtk" />
      </div>
      <div class="input-group">
        <label for="critRate" style="color: #dddddd;">Crit Rate:</label>
        <input type="number" id="critRate" />
      </div>
      <div class="input-group">
        <label for="critDmg">Crit DMG:</label>
        <input type="number" id="critDmg" />
      </div>
      <div class="input-group">
        <label for="dmgMultiplier">DMG Multiplier:</label>
        <input type="number" id="dmgMultiplier" />  
      </div>
      <br>
      <div class="hidee">
      <button id="calculateBtn" class="w3-hover-white pulse-button">CALCULATE</button>
    </div>
  </div>

    <div class="w3-display-middle g1" id="kktina" style="opacity: 0%">
      <h3 class="g2" style="color: white;">Results</h3>
      <div id="results">
        <p>Average DMG: <span id="avgDmg" class="w"></span></p>
        <p>DMG per 100 hits: <span id="dmgPer100" class="w"></span></p>
        <p>Min DMG: <span id="minDmg" class="w"></span></p>
        <p>Max DMG: <span id="maxDmg" class="w"></span></p> <br>
        <p>Recommendation*: <span id="rec" class="w"></span></p>
      </div>
  </div> <br>
  <button id="saveBtn" class="w3-hover-white pulse-button2 w3-hide w3-animate-opacity" onclick="saving()">SAVE DATA</button>
</div>
 <h1 id="loge" class="g1 w3-display-middle loge w3-show" onclick="window.location.href='account.php'">PLEASE LOGIN FIRST</h1>
<style>
	.calculator {
  

}

#kktina {
  text-align-last: center;
}

.calc {
	margin-left: 50px;
	width: 300px;  
  padding: 20px; 
  border: 1px solid #ccc;
  border-radius: 5px; 
  display: inline-block;
}

.input-group {
  margin-bottom: 10px; 
  font-family: g1;
}

label {
  display: block;
  margin-bottom: 5px; 
}

input {
  width: 100px;
  padding: 8px; 
  border: 1px solid #ccc;
  border-radius: 10px; 
  box-sizing: border-box;
}

#calculateBtn {
  background-color: #4CAF50;
  font-family: g1;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
  overflow: hidden;
}

#saveBtn {
  background-color: #00BFFF;
  font-family: g1;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
  overflow: hidden;
  margin-left: 72px;
  margin-top: 25px;
}

.pulse-button {
  box-shadow: 0 0 0 0 transparent;
  transition: box-shadow 1s ease-in-out;
}

.pulse-button:hover {
  animation: pulse 2s infinite;
  box-shadow: 0 0 0 10px rgba(0, 255, 0, 0.5);
}

@keyframes pulse {
  0% { box-shadow: 0 0 0 0 transparent; }
  50% { box-shadow: 0 0 10px 5px rgba(0, 255, 0, 0.5); background-color: white; color: green;}
  100% { box-shadow: 0 0 0 0 transparent; }
}

.pulse-button2 {
  box-shadow: 0 0 0 0 transparent;
  transition: box-shadow 1s ease-in-out;
}

.pulse-button2:hover {
  animation: pulse1 2s infinite;
  box-shadow: 0 0 0 10px rgba(0, 255, 0, 0.5);
}

@keyframes pulse1 {
  0% { box-shadow: 0 0 0 0 transparent; }
  50% { box-shadow: 0 0 10px 5px rgba(0, 191, 255, 0.5); background-color: white; color: #00BFFF;}
  100% { box-shadow: 0 0 0 0 transparent; }
}

.w {
  color: white;
}
</style>

<script>
  var registered = localStorage.getItem("registered") === "true";
  var uziId = localStorage.getItem("spId");
  var shouldSave = false;
  console.log(uziId);

  if (registered === true) {
  document.getElementById("body").classList.remove("no-scroll");
  document.getElementById("loge").classList.remove("w3-show");
  document.getElementById("loge").classList.add("w3-hide");
  document.getElementById("block").classList.remove("log");
  console.log("welcome");
} else {
  console.log("register please");
  
}

  const container = document.getElementById("kktina");

	console.log("do konzole se neleze lidem 🤓☝");
	
$(document).ready(function() {
  $("#calculateBtn").click(function() {
    $(this).css("cursor", "wait");
    setTimeout(function() {
      $("#calculateBtn").css("cursor", "default");
    }, 450);
  });
});


 function saving() {
 
}

	function drpAn() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

const baseAtkInput = document.getElementById("baseAtk");
const extraAtkInput = document.getElementById("extraAtk");
const critRateInput = document.getElementById("critRate");
const critDmgInput = document.getElementById("critDmg");
const dmgMultiplierInput = document.getElementById("dmgMultiplier");
let used = false;


calculateBtn.addEventListener("click", () => {
  const baseAtk = parseFloat(baseAtkInput.value); 
  const extraAtk = parseFloat(extraAtkInput.value); 
  let critRate = parseFloat(critRateInput.value);
  const critDmg = parseFloat(critDmgInput.value);
  const dmgMulti = parseFloat(dmgMultiplierInput.value);
  const element = document.getElementById("kktina");
  used = true;
  /*document.getElementById("saveBtn").classList.remove("w3-hide");
  document.getElementById("saveBtn").classList.add("w3-show");*/
  let opacity = 0; 
    const intervalId = setInterval(() => {
      if (opacity >= 1) {
        clearInterval(intervalId);
      } else {
        opacity += 0.01; 
        element.style.opacity = opacity;
      }
    }, 10);

    if(extraAtk > 0) {
      var usableAtk = baseAtk + extraAtk;
    } else {
      var usableAtk = baseAtk;
    }

  console.log(baseAtk, extraAtk, critRate, critDmg, dmgMulti);
 
  let critDmgMin;

  if(critRate >= 100) {
    critDmgMin = (Math.round(((critDmg  / 100) + 1) * usableAtk));
    critRate = 100;
  } else {
    critDmgMin = (Math.round(usableAtk));
  }

 

  var averageDmg = (Math.round((( usableAtk * (1 + critDmg / 100)) * ( critRate / 100) + ( usableAtk + ( 1 - ( critRate / 100 ) * usableAtk )) - 1)));
  var dmgPer100 = (Math.round((100 * (( usableAtk * (1 + critDmg / 100)) * ( critRate / 100) + ( usableAtk + ( 1 - ( critRate / 100 ) * usableAtk )) - 1))));
  var critDmgMax = (Math.round(((critDmg  / 100) + 1) * usableAtk));

  if (dmgMulti > 0) {
    averageDmg = (Math.round(averageDmg * ((dmgMulti / 100) + 1)));
    dmgPer100 = (Math.round(dmgPer100 * ((dmgMulti / 100) + 1)));
    critDmgMax = (Math.round(critDmgMax * ((dmgMulti / 100) + 1)));
    critDmgMin = (Math.round(critDmgMin * ((dmgMulti / 100) + 1)));
  }

  console.log("average dmg: " + averageDmg);
  console.log("critDmg max:" + critDmgMax);
  console.log("per 100 hits:" + dmgPer100)
  console.log("min dmg: " + critDmgMin);

  let message;
if (critRate == 5 && critDmg == 50) {
    var shouldSave = true;
    message = "Your damage numbers are lower than Paimon's emergency food supply!";
} else if (critRate < 5) {
  var shouldSave = true;
  message = "some shit aint no worky";
} else if (critRate < 40) {
  var shouldSave = true;
  message = "You need crit rate artifacts now.";
} else if (critRate > 100) {
  var shouldSave = true;
  message = "You have useless crit rate, anything over 100 doesn't do anything.";
} else if (critRate < 65 && critDmg < 120) {
  var shouldSave = true;
  message = "Both of your crit stats are low, consider upgrading your artifacts.";
} else if (critRate < 65 && critDmg > 150) {
  var shouldSave = true;
  message = "Your crit rate is kinda low, consider upgrading your artifacts.";
} else if (critRate < 65 && critDmg >= 120) {
  var shouldSave = true;
  message = "Your crit rate could be higher.";
} else if (critRate >= 65 && critDmg < 120) {
  var shouldSave = true;
  message = "Your crit damage is low, consider upgrading your artifacts.";
} else if (critRate >= 65 && critDmg >= 120 && critRate < 80) {
  var shouldSave = true;
  message = "Nice, pretty decent build.";
} else if (critRate >= 80 && critDmg <= 150) {
  var shouldSave = true;
  message = "bittt more crit dmg and its perfect"
} else if (critRate >= 80 && critDmg >= 230) {
  var shouldSave = true;
  message = "GOD fucking tier build!";
} else if (critRate >= 80 && critDmg >= 150) {
  var shouldSave = true;
  message = "Fantastic build!";
} else if (critRate == 0 && critDmg == 0) {
  var shouldSave = true;
  message = "Your damage numbers are lower than Paimon's emergency food supply!";
} else {
  var shouldSave = false;
  message = "some shit aint no worky";
}

document.getElementById('avgDmg').innerText = averageDmg.toLocaleString();
document.getElementById('dmgPer100').innerText = dmgPer100.toLocaleString();
document.getElementById('minDmg').innerText = critDmgMin.toLocaleString();
document.getElementById('maxDmg').innerText = critDmgMax.toLocaleString();

if (shouldSave === true) {
 
var data = JSON.stringify({minDmg: critDmgMin, maxDmg: critDmgMax, avgDmg: averageDmg, dmgPer100: dmgPer100, uziId: uziId});
var xhr = new XMLHttpRequest();
   
xhr.open("POST", "uklDoData.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("data=" + encodeURIComponent(data));

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    console.log("Data saved successfully!");
  }
};
} else {
  console.log("fucking crap nigga");
}

console.log(message);
 const existingElement = container.querySelector("p.w");

    if (existingElement) {
      
      existingElement.remove();
      const newElement = document.createElement("p");
      newElement.classList.add("w");
      const textNode = document.createTextNode(message);
      newElement.appendChild(textNode);
      container.appendChild(newElement);
    } else {
      
      const newElement = document.createElement("p");
      newElement.classList.add("w");
      const textNode = document.createTextNode(message);
      newElement.appendChild(textNode);
      container.appendChild(newElement);
    }
}); 

saveBtn.addEventListener("click", () => {
  if (used === true) {
console.log("nice");
} else {
  console.log("kkt");
}
});
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
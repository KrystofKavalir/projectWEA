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
<p class="damn g1">
	<g class="texto extra">Genshin Damage Calculator: Frequently Asked Questions</g><br>
Alright nerds, listen up! You got questions about our epic damage calculator? Buckle up your ass, cuz we got answers that are as savage as a Diluc main on a Tuesday. <br>
<br><br>
<g class="texto">1. What the heck is this thing and why should I use it?</g><br>

This, my friend, is not your grandma's calculator. This is the Genshin Damage Calculator, forged in the fires of Mount Everest (or more likely Dexy's basement). It's like the Holy Grail for damage dealers, letting you predict the pain you're about to unleash on your enemies better than Klee predicting explosions.

<br><br><g class="texto">2. I put all my Primogems into getting Raidens's booty banner. Now I have no characters! Help!</g><br>

Okay, first of all, priorities, my dude. Second, this calculator ain't a gacha god. It can't magically pull characters out of thin air (unless Dexy figures out how to hack the Matrix, which wouldn't surprise anyone). But hey, at least you can optimize the characters you do have with this bad boy.

<br><br><g class="texto">3. Is this calculator better than sliced bread?</g><br>

This calculator is the Beyonce of damage calculators, darling. Sliced bread is yesterday's news. Now get out there and conquer Teyvat with the power of KNOWLEDGE (and some sick crits).

<br><br><g class="texto">4. My damage still sucks! What am I doing wrong?</g><br>

Listen up, sunshine. There's a chance it's not the calculator, it's you. Maybe you're building characters like a potato builds a spaceship. Use some guides, learn about character synergy, and stop blaming our perfectly good calculator for your lack of gaming skills.

<br><br><g class="texto">5. Can this calculator predict the future? Like, will I finally pull a five-star weapon?</g><br>

No, it can't predict the gacha gods' cruel whims. But hey, at least it can predict the future pain you'll inflict on your enemies. That's gotta count for something, right?

<br><br><g class="texto">6. This calculator is too complicated! I just wanna unga bunga with my Diluc!</g><br>

Hey, we get it. Not everyone's a damage-dealing mastermind. But the more you understand, the more you can wreck everything in your path. Think of it as leveling up your brain alongside your characters.

<br><br><g class="texto">7. Will this calculator break the game?</g><br>

About as likely as Timmie ever getting his pigeons back. This calculator just helps you optimize what you already have. The real game-breaking is up to you and your mad combat skills.

<br><br><g class="texto">9. What unholy magic does this calculator possess?</g><br>

No black magic here, just complex algorithms (so basically black magic) crafted by Dexy and Kavicka (the resident damage-dealing masterminds). More complex than even your momma and impossible to be cooked by noobies.
</p>
</div>
<br><br><br><br><br><br>




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


</script>
</body>
</html>
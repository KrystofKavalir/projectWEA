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
		}

		.mainText {
			padding-top: 160px;
			padding-left: 50px;
		}

		.container {
			width: 50%;
			height: 50%;
			border-radius: 30px;
			background-color: #1e2124;
			color: #b6b6b6;
			box-shadow: 0px 10px 10px 5px #282b30;
		}

		.containerBig {
			width: 90%;
			height: 70%;
			border-radius: 30px;
			background-color: #1e2124;
			color: #b6b6b6;
			box-shadow: 0px 10px 10px 5px #282b30;
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

    }

	</style>
	<script src="jquery-3.7.1.min.js"></script>
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
    <a href="account.php" class="w3-bar-item w3-button"><b>Account</b></a>
    <a href="calculator - copy.php" class="w3-bar-item w3-button">Calculator</a>
    <a href="faq.php" class="w3-bar-item w3-button">FAQ</a>
    <a href="users.php" class="w3-bar-item w3-button">Users</a>
  </div>
</g>
</h1>
</div>

<div class="w3-hide w3-animate-opacity2" id="signin">
	<div class="w3-show w3-display-middle container" >
		<div class="w3-display-topmiddle" style="padding-top: 50px; margin-left: -10%;">
		 <div class="input-group ">
        <label for="username">Username:</label>
        <input type="text" id="username" autocomplete="username" style="width: 170%;" />
      </div>
      <div class="input-group ">
        <label for="password">Password:</label>
        <input type="password" id="password" autocomplete="current-password" style="width: 170%;"/>
      </div>
     </div> 
		<button class="w3-button w3-display-middle pulse-button-orange" id="calculateBtn, loginBtn" onclick="signin()" style="font-family: g2; font-size: 200%; margin-top: 50px; color: white;">Log in</button>
		<div>
			<button class="w3-button w3-display-bottommiddle pulse-button" onclick="signup()" style="font-family: g2; font-size: 200%; margin-bottom: 20px; margin-left: -20%; color: white;">SIGN UP</button>
			<button class="w3-button w3-display-bottommiddle pulse-button-red" onclick="easterEggPass()" style="font-family: g2; font-size: 130%; margin-bottom: 20px; margin-left: 20%;color: white;">Forgot Password</button>
		</div>
</div>  
</div>
</div>

<div class="w3-hide w3-animate-opacity2" id="signup">
	
	<div class="w3-show w3-display-middle container " >
		<button class="myshit back" id="signin" onclick="signinLoad()">←back</button>
		<div class="w3-display-topmiddle" style="padding-top: 50px; margin-left: -10%;">
		 <div class="input-group ">
        <label for="username">Username:</label>
        <input type="text" id="newUsername" autocomplete="username" style="width: 170%;" />
      </div>
      <div class="input-group ">
        <label for="password">Password:</label>
        <input type="password" id="newPassword" autocomplete="new-password" style="width: 170%;"/>
      </div>
      <div class="input-group ">
        <label for="password">Password confirm:</label>
        <input type="password" id="newPasswordConfirm" autocomplete="new-password" style="width: 170%;"/>
      </div>
     </div> 
		<button class="w3-button w3-display-middle pulse-button" id="calculateBtn" onclick="register()" style="font-family: g2; font-size: 200%; margin-top: 120px; color: white;">register</button>
</div>  
</div>
</div>

<div class="w3-hide w3-animate-opacity2" id="accountPage">
	
	<div class="w3-show w3-display-middle containerBig" >
		<button class="myshit back" id="editBut" onclick="editAcc()">edit</button>
		<button class="myshit2 back" id="logOut" onclick="logOut()">log out</button>
		<button class="myshit3 back" id="history" onclick="history(); goToData('account')">history</button>
		<div class="w3-display-topmiddle" style="padding-top: 50px; margin-left: -10%;">
			<div class="pfp" style=" ">
				<img id="pfp">
			</div>
		 <div class="input-group ">
		 	<br>
        <label for="username" id="nick" class="g2" style="font-size: 200%; color: white;" ></label>
        
      </div>
      <div class="input-group ">
        <label id="bio" for="bio"></label>
        
      </div>
      <div class="input-group " onclick="copyUID()">
        <label id="uid" style="width: 33%; height: 130%; background-color: white; color: black; border-radius: 8px; cursor: pointer;"></label>
        
      </div>
     </div> 
		<!-- <button class="w3-button w3-display-middle pulse-button" id="calculateBtn" onclick="register()" style="font-family: g2; font-size: 200%; margin-top: 120px; color: white;">register</button> -->
</div>  
</div>
</div>


<div class="w3-hide w3-animate-opacity2" id="edit">
	
	<div class="w3-show w3-display-middle container" >
		<button class="myshit back" id="signin" onclick="signinLoad()">←back</button>
		<div class="w3-display-topmiddle" style="padding-top: 50px; margin-left: -10%;">
		 <div class="input-group ">
        <label for="username">Nickname:</label>
        <input type="text" id="newNick" autocomplete="username" style="width: 170%;  cursor: not-allowed !important; color: grey;" disabled="disabled" />
      </div>
      <div class="input-group ">
        <label for="password">Bio:</label>
        <input type="text" id="newBio" autocomplete="new-password" style="width: 170%;"/>
      </div>
      <div class="input-group ">
        <label for="password">UID:</label>
        <input type="number" id="newUID" autocomplete="new-password" style="width: 170%;"/>
      </div>
            <div class="input-group ">
        <label for="password">Link for profile picture:</label>
        <input type="text" id="newPfp" autocomplete="new-password" style="width: 170%;"/>
      </div>  
     </div> 
		<button class="w3-button w3-display-middle pulse-button" id="calculateBtn" onclick="register(); update()" style="font-family: g2; font-size: 130%; margin-top: 180px; color: white;">save changes</button>
</div>  
</div>
</div>





<div class="history w3-hide">
<div class="mainText">
<h1 class="g2" style="color: white;">History</h1>
</div>
<div id="grid-container" class="g1"></div>
</div>

<style type="text/css">


	.pfp {
  width: 300px;
  height: 300px;
  overflow: hidden;
  position: relative;
}

.pfp img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  object-fit: cover;
  width: 100%;
  height: 100%;
}



	.container{
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
  
  padding: 8px; 
  border: 1px solid #ccc;
  border-radius: 5px; 
  box-sizing: border-box;
}

.myshit {
  font-family: g2;
  font-size: 150%;
  margin-top: 10px;
  color: #b6b6b6;
  background-color: transparent;
  border: none;
  transition: color 0.5s ease;
  padding-left: 20px;
  padding-top: 8px;
  cursor: pointer;
}

.myshit:hover {
 color: white;
}

.myshit2 {
  font-family: g2;
  font-size: 150%;
  margin-top: 10px;
  color: #b6b6b6;
  background-color: transparent;
  border: none;
  transition: color 0.5s ease;
  padding-left: 82%;
  padding-top: 8px;
  cursor: pointer;
}

.myshit2:hover {
 color: white;
}

.myshit3 {
  font-family: g2;
  font-size: 150%;
  margin-top: 10px;
  color: #b6b6b6;
  background-color: transparent;
  border: none;
  transition: color 0.5s ease;
  padding-left: 20px;
  padding-top: 8px;
  cursor: pointer;
}

.myshit3:hover {
 color: white;
}

.pulse-button {
  box-shadow: 0 0 0 0 transparent;
  transition: box-shadow 1s ease-in-out;
  border-radius: 30px;
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



.pulse-button-red {
  box-shadow: 0 0 0 0 transparent;
  transition: box-shadow 1s ease-in-out;
  border-radius: 30px;
}

.pulse-button-red:hover {
  animation: pulse-red 2s infinite;
  box-shadow: 0 0 0 10px white;
}

@keyframes pulse-red {
  0% { box-shadow: 0 0 0 0 transparent; }
  50% { box-shadow: 0 0 10px 5px red; background-color: white; color: red;}
  100% { box-shadow: 0 0 0 0 transparent; }
}


.pulse-button-orange {
  box-shadow: 0 0 0 0 transparent;
  transition: box-shadow 1s ease-in-out;
  border-radius: 30px;
}

.pulse-button-orange:hover {
  animation: pulse-orange 2s infinite;
  box-shadow: 0 0 0 10px rgba(0, 255, 0, 0.5);
}

@keyframes pulse-orange {
  0% { box-shadow: 0 0 0 0 transparent; }
  50% { box-shadow: 0 0 10px 5px #00a2ff; background-color: #1e2124; color: #00a2ff;}
  100% { box-shadow: 0 0 0 0 transparent; }
}
</style>

<script>
var pfp = "./empty.png";	
var nick = " ";
var bio = " ";
var UID = " ";

var spId = localStorage.getItem("spId");

var registered = localStorage.getItem("registered") === "true";





	if (registered === true) {
  
  console.log("welcome");
  	let finder = false;
		fetch('datas.php')
  .then(response => response.json())
  .then(data => {
   
    data.forEach(account => {
      console.log(`Nickname: ${account.nickname}, Password: ${account.password}, Bio: ${account.bio}, UID: ${account.UID}, pfp: ${account.pfp}, ID: ${account.id}`);

      if (account.id === spId) {
      	
        console.log("found" + account.id);
        finder = true;
        console.log(account.password);
        neededPass = account.password;
        	
        		if (account.pfp.length < 10) {
        			pfp = "./empty.png";
        		} else {
        			pfp = account.pfp;	
        		}

        		
						nick = account.nickname;
						bio = account.bio;
						UID = account.UID;
						spId = account.id;
						console.log(spId);
            localStorage.setItem("registered", true);
            localStorage.setItem("spId", spId);

            accountPage();
      
        	
      } else {
      	if (finder === false) {
      	console.log("account not found");
      	
				} else {
					console.log("try more");
				}
      }
    });
  })
	document.getElementById('uid').innerHTML = "&nbsp;#" + UID;
} else {
  signinLoad();
  console.log("register please");
}

	function history() {
		if (registered = localStorage.getItem("registered") === "true") {
		
	} else {
		console.log("error, not logged in");
	}
	}
	

	console.log("do konzole se neleze lidem 🤓☝");
	

	function drpAn() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
var neededPass = "superSecretShit";	
var username = document.getElementById("username");
var password = document.getElementById("password");

var regUsername = document.getElementById("newUsername");
var regPassword1 = document.getElementById("newPassword");
var regPassword2 = document.getElementById("newPasswordConfirm");

var updatedNick = document.getElementById("newNick");
var updatedBio = document.getElementById("newBio");
var updatedUID = document.getElementById("newUID");
var updatedPfp = document.getElementById("newPfp");

function signin() {
    var enteredUsername = username.value;
    var enteredPassword = password.value;
    
    console.log("username: " + enteredUsername, "\nsuper secret password: " + enteredPassword);

    /*var xhr = new XMLHttpRequest();
    xhr.open("POST", "uklDoDtbse.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("username=" + encodeURIComponent(enteredUsername) + "&password=" + encodeURIComponent(enteredPassword));

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Response from server: " + xhr.responseText);
            
        }
    };*/

    
		
		let finder = false;
		fetch('datas.php')
  .then(response => response.json())
  .then(data => {
   
    data.forEach(account => {
      console.log(`Nickname: ${account.nickname}, Password: ${account.password}, Bio: ${account.bio}, UID: ${account.UID}, pfp: ${account.pfp}, ID: ${account.id}`);

      if (account.nickname === enteredUsername) {
      	
        console.log("found" + account.id);
        finder = true;
        console.log(account.password);
        neededPass = account.password;
        	if (neededPass === enteredPassword) {
        		console.log("right password");
        		

        		if (account.pfp.length < 10) {
        			pfp = "./empty.png";
        		} else {
        			pfp = account.pfp;	
        		}

						nick = account.nickname;
						bio = account.bio;
						UID = account.UID;
						spId = account.id;
						console.log(spId);
            localStorage.setItem("registered", true);
            localStorage.setItem("spId", spId);

            accountPage();
      
        	} else {
        		console.log("wrong password");
        		alert("wrong password");
        	}
      } else {
      	if (finder === false) {
      	console.log("account not found");
      	
				} else {
					console.log("try more");
				}
      }
    });
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });

}

function goToData(currentPage) {
  localStorage.setItem("previousPage", currentPage); 
  window.location.href = "data.php"; 
}

function signinLoad() {

		document.getElementById("newUsername").value = "";
    document.getElementById("newPassword").value = "";
    document.getElementById("newPasswordConfirm").value = "";


		document.getElementById("signup").classList.remove("w3-show");
	  document.getElementById("signup").classList.add("w3-hide");

		document.getElementById("signin").classList.remove("w3-hide");
	  document.getElementById("signin").classList.add("w3-show");

	  document.getElementById("edit").classList.remove("w3-show");
	  document.getElementById("edit").classList.add("w3-hide");

	  document.getElementById("newNick").value = "";
    document.getElementById("newBio").value = "";
    document.getElementById("newUID").value = "";
    document.getElementById("newPfp").value = "";
}

function signup() {
		document.getElementById("signup").classList.remove("w3-hide");
	  document.getElementById("signup").classList.add("w3-show");

	  document.getElementById("edit").classList.remove("w3-show");
	  document.getElementById("edit").classList.add("w3-hide");


}

function register() {
	var newUsername = regUsername.value;
  var newPassword = regPassword1.value;
  var newPasswordConfirm = regPassword2.value;






    console.log("username: " + newUsername, "\npassword1: " + newPassword, "\npassword2: " + newPasswordConfirm);
if (newPassword < 5 || newUsername < 5) {
  if (registered = localStorage.getItem("registered") === "false") {
	alert("Your username and password requires at least 5 characters");
  } else {

  }
} else if (newPassword === newPasswordConfirm) {
    console.log("well done");
    localStorage.setItem("registered", true);
        var data = JSON.stringify({username: newUsername, password: newPassword, password2: newPasswordConfirm});
var xhr = new XMLHttpRequest();
    accountPage();
xhr.open("POST", "uklDoDtbse.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("data=" + encodeURIComponent(data));

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    console.log("Data saved successfully!");
  }
};
  } else {
    console.log("idiot");
    document.getElementById("newPasswordConfirm").value = "";
    alert("Your passwords don't match, try again.")
  }
setTimeout(function(){
    console.log("THIS IS");

fetch('datas.php')
  .then(response => response.json())
  .then(data => {
   
    data.forEach(account => {
      console.log(`Nickname: ${account.nickname}, Password: ${account.password}, Bio: ${account.bio}, UID: ${account.UID}, pfp: ${account.pfp}, ID: ${account.id}`);

      if (account.nickname === newUsername) {
        
        console.log("found" + account.id);
        
        console.log(account.password);
        
            if (account.pfp.length < 10) {
              pfp = "./empty.png";
            } else {
              pfp = account.pfp;  
            }

            nick = account.nickname;
            bio = account.bio;
            UID = account.UID;
            spId = account.id;
            console.log(spId);
            localStorage.setItem("registered", true);
            localStorage.setItem("spId", spId);

            accountPage();
      
          
      } else {
        
        console.log("account not found");
        
        
        
      }
    });
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });


}, 500);
      

}

function easterEggPass() {
	var enteredUsernameHack = username.value;
	


    fetch('datas.php')
  .then(response => response.json())
  .then(data => {
   
    data.forEach(account => {
      console.log(`Nickname: ${account.nickname}, Password: ${account.password}, Bio: ${account.bio}, UID: ${account.UID}, pfp: ${account.pfp}, ID: ${account.id}`);

      if (account.nickname === enteredUsernameHack) {
        
        console.log("found" + account.id);
        
        console.log(account.password);
        var passworde = account.password;
        alert("password for user \"" + enteredUsernameHack + "\" is: " + passworde)
        
      } else {
        console.log("couldnt find acc");
        
      }
    });
  })
  .catch(error => {
    console.error('Error fetching data:', error);
    alert("aaaaaaand the database just fucked itself in the ass once again...")
  });

}





function accountPage() {
		document.getElementById("username").value = "";
    document.getElementById("password").value = "";

    document.getElementById("newUsername").value = "";
    document.getElementById("newPassword").value = "";
    document.getElementById("newPasswordConfirm").value = "";

		document.getElementById("signin").classList.remove("w3-show");
	  document.getElementById("signin").classList.add("w3-hide");

	  document.getElementById("signup").classList.remove("w3-show");
	  document.getElementById("signup").classList.add("w3-hide");

		document.getElementById("accountPage").classList.remove("w3-hide");
	  document.getElementById("accountPage").classList.add("w3-show");

	  document.getElementById("edit").classList.remove("w3-show");
	  document.getElementById("edit").classList.add("w3-hide");



			document.getElementById("pfp").src = pfp;
	  	document.getElementById('nick').innerText = nick;
	  	document.getElementById('bio').innerText = bio;
	  	document.getElementById('uid').innerHTML = "&nbsp;#" + UID;

	 	 document.getElementById("edit").classList.remove("w3-show");
	 	 document.getElementById("edit").classList.add("w3-hide");

}

function copyUID() {
 		navigator.clipboard.writeText
		(UID)
		.then(() => {
      alert("UID " + UID + " was copied to your clipboard.");
    })

}

	function editAcc() {

		console.log(spId);
    document.getElementById("newNick").value = nick;


		document.getElementById("signin").classList.remove("w3-show");
	  document.getElementById("signin").classList.add("w3-hide");

	  document.getElementById("signup").classList.remove("w3-show");
	  document.getElementById("signup").classList.add("w3-hide");

	  document.getElementById("signup").classList.remove("w3-show");
	  document.getElementById("signup").classList.add("w3-hide");

		document.getElementById("edit").classList.remove("w3-hide");
	  document.getElementById("edit").classList.add("w3-show");
	}

	function logOut() {

		localStorage.removeItem("registered");  

		document.getElementById("accountPage").classList.remove("w3-show");
	  document.getElementById("accountPage").classList.add("w3-hide");

	  document.getElementById("signup").classList.remove("w3-show");
	  document.getElementById("signup").classList.add("w3-hide");

	  document.getElementById("edit").classList.remove("w3-show");
	  document.getElementById("edit").classList.add("w3-hide");
location.reload()
.then(() => {
		document.getElementById("signin").classList.remove("w3-hide");
	  document.getElementById("signin").classList.add("w3-show");
})

	}

	function update() {
    var enteredNick = updatedNick.value;
    var enteredBio = updatedBio.value;
    var enteredUID = updatedUID.value;
    var enteredPfp = updatedPfp.value;
    console.log(enteredNick + "\n" + enteredBio + "\n" + enteredUID + "\n" + enteredPfp);
    if (enteredNick.length >= 3) {
    	console.log("update nick");
    	document.getElementById('nick').innerText = enteredNick;

    } else {
    	console.log("dont update nick");
    }
    if (enteredBio.length >= 2) {
    	
    	document.getElementById('bio').innerText = enteredBio;
    	console.log("update bio" + spId);
   	    	  	var data = JSON.stringify({ 
    enteredBio: enteredBio, 
    spId: spId 
});

console.log(data);
var xhr = new XMLHttpRequest();
xhr.open("POST", "uklBio.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("data=" + encodeURIComponent(data));

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            console.log("Data saved successfully!");
        } else {
            console.error("Error saving data:", xhr.status, xhr.responseText);
        }
    }
};

    } else {
    	console.log("dont update bio");
    }
    if (enteredUID.length === 8) {
    	console.log("update uid");
    	document.getElementById('uid').innerHTML =  "&nbsp;#" + enteredUID;
    	UID = enteredUID;
    	
    	  	var data = JSON.stringify({ 
    enteredUID: enteredUID, 
    spId: spId 
});

var xhr = new XMLHttpRequest();
xhr.open("POST", "uklUID.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("data=" + encodeURIComponent(data));

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            console.log("Data saved successfully!");
        } else {
            console.error("Error saving data:", xhr.status, xhr.responseText);
        }
    }
};

    } else {
    	console.log("dont update uid");
    }
    if (enteredPfp.length >= 2) {
    	console.log("update pfp");
    	document.getElementById('pfp').src = enteredPfp;

    	    	  	var data = JSON.stringify({ 
    enteredPfp: enteredPfp, 
    spId: spId 
});

var xhr = new XMLHttpRequest();
xhr.open("POST", "uklPfp.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("data=" + encodeURIComponent(data));

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            console.log("Data saved successfully!");
        } else {
            console.error("Error saving data:", xhr.status, xhr.responseText);
        }
    }
};


    } else {
    	console.log("dont update pfp");
    }
    document.getElementById("newNick").value = "";
    document.getElementById("newBio").value = "";
    document.getElementById("newUID").value = "";
    document.getElementById("newPfp").value = "";
    document.getElementById("edit").classList.remove("w3-show");
	  document.getElementById("edit").classList.add("w3-hide");
	}



</script>
</body>
</html>
<!--
var pfp = "./xiao.png";	
var nick = "Dexy";
var bio = "My very beatiful bio as genshin no lifer";
var UID = 78689798;
	-->
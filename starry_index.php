<!DOCTYPE html>
<html>
<head>
	<title>Starry Sky Full of Animated Pictures with Stars & Planets</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
        #buttons-container {
        position: absolute;
        top: 20px;
        right: 20px;
    }
    #buttons-container button {
        margin: 5px;
    }
    <style>
        #buttons-container {
        position: absolute;
        top: 20px;
        right: 20px;
    }
    #buttons-container button {
        margin: 5px;
    }
		body {
			background-color: black;
			background-repeat: repeat;
			background-size: cover;
		}
		.container {
			margin-top: 50px;
		}
		.planet {
			position: absolute;
			border-radius: 50%;
			box-shadow: 0px 0px 10px 1px #fff;
		}
        .planet-name {
display: none;
position: absolute;
font-size: 12px;
color: white;
text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
transform: translate(-50%, -50%);
z-index: 3;
}


        #sun {
			width: 150px;
			height: 150px;
			background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx5pM52cDpaWkIFpnbWUulioXGcF3L9T_HlQ&usqp=CAU');
			background-repeat: no-repeat;
			background-size: cover;
			animation: rotate-sun 10s linear infinite;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			z-index: 100;
		}

		#mercury {
			width: 30px;
			height: 30px;
			background-image: url('https://media4.giphy.com/media/wdeczeuXkGYkE/giphy.gif');
			background-repeat: no-repeat;
			background-size: cover;
			animation: rotate-mercury 3s linear infinite;
			left: 45%;
			top: 50%;
			transform: translate(-50%, -50%) rotate(0deg) translate(80px) rotate(0deg);
			z-index: 1;
		}
		#venus {
			width: 40px;
			height: 40px;
			background-image: url('https://bestanimations.com/media/planets/39272898venus-planet-animation-5.gif');
			background-repeat: no-repeat;
			background-size: cover;
			animation: rotate-venus 5s linear infinite;
			left: 45%;
			top: 50%;
			transform: translate(-50%, -50%) rotate(0deg) translate(120px) rotate(0deg);
			z-index: 2;
		}
		#earth {
			width: 50px;
            height: 50px;
background-image: url('https://cdn.pixabay.com/animation/2022/11/13/07/16/07-16-41-513_512.gif');
background-repeat: no-repeat;
background-size: cover;
animation: rotate-earth 6s linear infinite;
left: 50%;
top: 50%;
transform: translate(-50%, -50%) rotate(0deg) translate(170px) rotate(0deg);
z-index: 3;
}
#mars {
width: 35px;
height: 35px;
background-image: url('https://media4.giphy.com/media/13cxHLqRer5q6s/200w.gif?cid=6c09b952g7kqyevf236nott4p7gt02zhcqcog649wq7bazlx&rid=200w.gif&ct=g');
background-repeat: no-repeat;
background-size: cover;
animation: rotate-mars 7s linear infinite;
left: 50%;
top: 50%;
transform: translate(-50%, -50%) rotate(0deg) translate(220px) rotate(0deg);
z-index: 4;
}
#jupiter {
width: 90px;
height: 90px;
background-image: url('https://media2.giphy.com/media/s2uampOAMWksU/giphy.gif');
background-repeat: no-repeat;
background-size: cover;
animation: rotate-jupiter 12s linear infinite;
left: 50%;
top: 50%;
transform: translate(-50%, -50%) rotate(0deg) translate(300px) rotate(0deg);
z-index: 5;
}
#saturn {
width: 80px;
height: 80px;
background-image: url('https://thumbs.gfycat.com/UntimelyGrimyBlackfish-size_restricted.gif');
background-repeat: no-repeat;
background-size: cover;
animation: rotate-saturn 14s linear infinite;
left: 50%;
top: 50%;
transform: translate(-50%, -50%) rotate(0deg) translate(400px) rotate(0deg);
z-index: 6;
}
#uranus {
width: 70px;
height: 70px;
background-image: url('https://thumbs.gfycat.com/MeaslyGracefulGalah-small.gif');
background-repeat: no-repeat;
background-size: cover;
animation: rotate-uranus 16s linear infinite;
left: 50%;
top: 50%;
transform: translate(-50%, -50%) rotate(0deg) translate(500px) rotate(0deg);
z-index: 7;
}
#neptune {
width: 60px;
height: 60px;
background-image: url('https://media2.giphy.com/media/mOQm7Vfdn9XQI/200.gif?cid=6c09b952g7kqyevf236nott4p7gt02zhcqcog649wq7bazlx&rid=200.gif&ct=g');
background-repeat: no-repeat;
background-size: cover;
animation: rotate-neptune 18s linear infinite;
left: 50%;
top: 50%;
transform: translate(-50%, -50%) rotate(0deg) translate(600px) rotate(0deg);
z-index: 8;
}
@keyframes rotate-sun {
from { transform: rotate(0deg); }
to { transform: rotate(360deg); }
}
@keyframes rotate-mercury {
from { transform: rotate(0deg) translate(80px) rotate(0deg); }
to { transform: rotate(360deg) translate(80px) rotate(0deg); }
}
@keyframes rotate-venus {
from { transform: rotate(0deg) translate(120px) rotate(0deg); }
to { transform: rotate(360deg) translate(120px) rotate(0deg); }
}
@keyframes rotate-earth {
from { transform: rotate(0deg) translate(170px) rotate(0deg); }
to { transform: rotate(360deg) translate(170px) rotate(0deg); }
}
@keyframes rotate-mars {
from { transform: rotate(0deg) translate(220px) rotate(0deg); }
to { transform: rotate(360deg) translate(220px) rotate(0deg); }
}
@keyframes rotate-jupiter {
from { transform: rotate(0deg) translate(300px) rotate(0deg); }
to { transform: rotate(360deg) translate(300px) rotate(0deg); }
}
@keyframes rotate-saturn {
from { transform: rotate(0deg) translate(400px) rotate(0deg); }
to { transform: rotate(360deg) translate(400px) rotate(0deg); }
}
@keyframes rotate-uranus {
from { transform: rotate(0deg) translate(500px) rotate(0deg); }
to { transform: rotate(360deg) translate(500px) rotate(0deg); }
}
@keyframes rotate-neptune {
from { transform: rotate(0deg) translate(600px) rotate(0deg); }
to { transform: rotate(360deg) translate(600px) rotate(0deg); }
}

</style>

</head>
<body>
<div class="container">
    <div class="planet" id="sun"></div>
    <div class="planet" id="mercury">
      <span class="planet-name">Mercury</span>
    </div>
    <div class="planet" id="venus">
      <span class="planet-name">Venus</span>
    </div>
    <div class="planet" id="earth">
      <span class="planet-name">Earth</span>
    </div>
    <div class="planet" id="mars">
      <span class="planet-name">Mars</span>
    </div>
    <div class="planet" id="jupiter">
      <span class="planet-name">Jupiter</span>
    </div>
    <div class="planet" id="saturn">
      <span class="planet-name">Saturn</span>
    </div>
    <div class="planet" id="uranus">
      <span class="planet-name">Uranus</span>
    </div>
    <div class="planet" id="neptune">
      <span class="planet-name">Neptune</span>
    </div>
  </div>

    <div id="buttons-container">
    <button id="move-planet-btn" class="btn btn-primary">Move Planet</button>
    <button id="show-names-btn" class="btn btn-primary">Show Planet Names</button>
    <button id="change-bg-btn" class="btn btn-primary">Change WebPage Background</button>
    <button id="stop-movement-btn" class="btn btn-primary">Stop Planet Movement</button>
    </div>
    <script>
    // Get the three buttons
    const movePlanetBtn = document.getElementById('move-planet-btn');
    const showNamesBtn = document.getElementById('show-names-btn');
    const changeBgBtn = document.getElementById('change-bg-btn');
    const stopMovementBtn = document.getElementById('stop-movement-btn');
    let animationId;
    // Add event listeners to the buttons
    movePlanetBtn.addEventListener('click', movePlanets);
    showNamesBtn.addEventListener('click', showPlanetNames);
    changeBgBtn.addEventListener('click', changeBackground);
    stopMovementBtn.addEventListener('click', stopPlanetMovement);

  function movePlanets() {
     const planets = document.querySelectorAll('.planet');
    let angle = 0;

    function animatePlanets() {
      planets.forEach((planet, index) => {
        const radius = 80 + index * 30; // Set the distance of the planet from the sun
        const x = Math.sin(angle * Math.PI / 180) * radius;
        const y = Math.cos(angle * Math.PI / 180) * radius;
        planet.style.transform = `translate(${x}px, ${y}px)`;
      });
      angle++;
      animationId = requestAnimationFrame(animatePlanets);
    }

    animationId = requestAnimationFrame(animatePlanets);
    }

    function showPlanetNames() {
      const planetNames = document.querySelectorAll('.planet-name');
      planetNames.forEach((name) => {
        name.style.display = 'block';
      });
    }

    function stopPlanetMovement() {
    cancelAnimationFrame(animationId);
  }

    // Function to change webpage background color by color name 
function changeBackground() {
  const newColor = prompt('Enter the name of the new background color:');
  document.body.style.backgroundColor = newColor;
}
</script>


<body>
<html>

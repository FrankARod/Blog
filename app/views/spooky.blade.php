<html>
<head>
	<title>Whack-a-Mole</title>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	
	<style type="text/css">
		#container {
			width: 600px;
			height: 600px;
			margin: auto;
			display: none;
			z-index: 1;
		}

		.molehole {
			width: 198px;
			height: 198px;
			float: left;
			border: solid black 1px;
		}

		.mole {
			background-color: red;
			background-image: url(img/skull.png);
			background-size: 198px 198px;
		}

		#info {
			position: absolute;
		}

		.doom {
			background-color: red;
			background-image: url(img/spooky2.gif);
		}

		#timerSkeletons {
			position: absolute;
			bottom: 0px;
			left: 0px;
			z-index: 0;
			display: none;
		}

		body {
			position: relative;
		}
	</style>
	
</head>
<body>
	<div id="info">	
		<h1>Whack the Mole</h1>
		<h2>Score: <span id="score"></span></h2>
		<h2>Record: <span id="record"></span></h2>
		<h2>Time: <span id="timer"></span></h2>
		<button>Start!</button>
	</div>
	
	<div id="container">
		<div id="cell1" class="molehole"></div>
		<div id="cell2" class="molehole"></div>
		<div id="cell3" class="molehole"></div>
		<div id="cell4" class="molehole"></div>
		<div id="cell5" class="molehole"></div>
		<div id="cell6" class="molehole"></div>
		<div id="cell7" class="molehole"></div>
		<div id="cell8" class="molehole"></div>
		<div id="cell9" class="molehole"></div>
	</div>

	<img id="timerSkeletons" src="img/dancing_spooky.gif">
	
	<audio id="audio">
		<source src="mp3/spooky.mp3" type="audio/mpeg">
		Your browser does not support the audio tag.
	</audio>

	<script type="text/javascript">
		var cell;
		var score = 0;
		var record = 0;
		var time = 30;
		var timerId;
		var moleSpawner;
		var moleTimeout = 1000;

		var getRandomInt = function (min, max) {
			return Math.floor(Math.random() * (max - min)) + min;
		}
		
		// Main game function
		var buttonOnClick = function () {
			score = 0;
			moleTimeout = 10000;
			time = 30;
			moleSpawner = setInterval(newMole, 200);
			timerId = setInterval(timer, 1000);
			setTimeout(endGame, 30000);
			$('#score').html(score);
			$('#audio').get(0).play();
			$('#timerSkeletons').css('left', 0);
			$('#timerSkeletons').show();
			$('#timerSkeletons').animate({left: '100%'}, 30000);
			$('#container').slideDown();
			$(this).unbind('click');
			$(this).hide();
		}

		var newMole = function() {
			$('body').toggleClass('doom');
			cell = '#cell' + getRandomInt(1, 9);
			
			if (!$(cell).hasClass('mole')) {
				$(cell).addClass('mole');		
				
				var timeoutId = setTimeout(function () {
					removeMole(cell);
				}, moleTimeout);
				
				$(cell).on('click', function () {
					score++;
					$('#score').html(score);
					if (moleTimeout > 100) {
						moleTimeout -= 15;
					} else {
						moleTimeout = 100;
					}
					removeMole('#' + $(this).attr('id'), timeoutId);
				});
			}
		}
		
		var timer = function() {
			time--;
			$('#timer').html(time);
		}

		var removeMole = function (moleId, timeoutId = null) {
			if (timeoutId !== null) {
				clearTimeout(timeoutId);
			}
			$(moleId).unbind('click');
			$(moleId).removeClass('mole');
		}

		var endGame = function () {
			if (score > record) {
				record = score;
			}
			
			$('.mole').unbind('click');
			$('.mole').removeClass('mole');
			$('#container').slideUp();
			$('button').show();
			$('button').click(buttonOnClick);
			$('#record').html(record);
			clearInterval(timerId);
			clearInterval(moleSpawner);
			$('#audio').get(0).pause();
			$('#audio').get(0).currentTime = 0;
			$('body').removeClass('doom');
		}

		// Starts the game on click
		$('button').click(buttonOnClick);
	</script>
</body>
</html>
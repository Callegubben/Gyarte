<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bannerstyle.css">
</head>
<body>

	<div class="main-banner" id="main-banner">
		<div class="imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev"></div>
		<div class="imgban" id="imgban3">
			<div class="imgban-box">
				<h2></h2>
				<p></p>
			</div>
			
		</div>
		<div class="imgban" id="imgban2">
			<div class="imgban-box">
				<h2></h2>
				<p></p>
			</div>
			
		</div>
		<div class="imgban" id="imgban1">
			<div class="imgban-box">
				<h2></h2>
				<p></p>
			</div>
			
		</div>
		<div class="imgbanbtn imgbanbtn-next" id="imgbanbtn-next"></div>

	</div>

<script>
	var bannerStatus = 1;
	var bannerTimer = 4000;

	window.onload = function() {
		bannerLoop();
	}

	var startBannerLoop = setInterval(function() {
		bannerLoop();
	}, bannerTimer);

	document.getElementById("main-banner").onmouseenter = function() {
		clearInterval(startBannerLoop);
	}

	document.getElementById("main-banner").onmouseleave = function() {
		startBannerLoop = setInterval(function() {
			bannerLoop();
		}, bannerTimer);
	}

	document.getElementById("imgbanbtn-prev").onclick = function() {
		if (bannerStatus === 1) {
			bannerStatus = 2;
		}
		else if (bannerStatus === 2) {
			bannerStatus = 3;
		}
		else if (bannerStatus === 3) {
			bannerStatus = 1;			
		}
		bannerLoop();
	}

	document.getElementById("imgbanbtn-next").onclick = function() {
		bannerLoop();
	}

	function bannerLoop() {
		if (bannerStatus === 1) {
			document.getElementById("imgban2").style.opacity = "0";
			setTimeout(function() {
			document.getElementById("imgban1").style.right = "0px";
			document.getElementById("imgban2").style.right = "-1200px";
			document.getElementById("imgban3").style.right = "1200px";

			}, 500);
			setTimeout(function() {
				document.getElementById("imgban2").style.opacity = "1";
			}, 1000);
			bannerStatus = 2;
		}
		else if (bannerStatus === 2) {
			document.getElementById("imgban3").style.opacity = "0";
			setTimeout(function() {
			document.getElementById("imgban2").style.right = "0px";
			document.getElementById("imgban3").style.right = "-1200px";
			document.getElementById("imgban1").style.right = "1200px";

			}, 500);
			setTimeout(function() {
				document.getElementById("imgban3").style.opacity = "1";
			}, 1000);
			bannerStatus = 3;
		}
		else if (bannerStatus === 3) {
			document.getElementById("imgban1").style.opacity = "0";
			setTimeout(function() {
			document.getElementById("imgban3").style.right = "0px";
			document.getElementById("imgban1").style.right = "-1200px";
			document.getElementById("imgban2").style.right = "1200px";

			}, 500);
			setTimeout(function() {
				document.getElementById("imgban1").style.opacity = "1";
			}, 1000);
			bannerStatus = 1;
		}

	}
</script>

</body>
</html>
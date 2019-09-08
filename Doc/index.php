<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">

		<div class="nav-top">
			<input type="checkbox" id="navcheck">
				<div class="nav-btn">
					<label for="navcheck">
						<span></span>
						<span></span>
						<span></span>
					</label>
				</div>
			<div class="logo-container">
				<img src="img/logo1.png" style="height: 65px; padding: 5px 15px;">
			</div>

			<div class="comp-container">
				<div class="search-container">
						<form action="#Search">
					      <input type="text" placeholder="Search.." name="search">
					      <button type="submit">Search</button>
					    </form>
				</div>
				<div class="account-container">
					<div class="link-circle">
						<button type="submit"><span id="icon"><img src="img/notif.png"></span><span id="text">Notification</span></button>
						<button type="submit"><span id="icon"><img src="img/user.png"></span><span id="text">Account</span></button>
					</div>
				</div>
			</div>
		</div>

		<div class="main-content">
			<div class="side-bar">
				<button type="submit"><span>+ </span>New</button>
				<div class="side-links">
					<a href="#mydoc" id="mydoc"><span><img src="img/mydoc.png"></span>My Documents</a>
					<a href="#sharewithme" id="share"><span><img src="img/sharewme.png"></span>Shared with Me</a>
					<a href="#"><span><img src="img/task.png"></span>Task</a>
					<a href="#"><span><img src="img/recent.png"></span>Recent</a>
					<a href="#"><span><img src="img/bin.png"></span>Bin</a>
				</div>
			</div>

			<div class="doc-content" id="whatthefu">
			</div>
		</div>
	</div>
</body>

<script>
	$(document).ready(function(){
	  $("#mydoc").click(function(){
	    $("#whatthefu").load("mydocuments.php");
	  });
	  $("#share").click(function(){
	    $("#whatthefu").load("sharewithme.php");
	  });
	});
</script>
</html>
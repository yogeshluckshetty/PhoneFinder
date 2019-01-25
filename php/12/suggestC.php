<?php 
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Web design/</title>
<link rel="stylesheet" type="text/css" href="rep1.css">
</head>
<body>
<header>
<div class="container">
<div class="name">
<h1><span class="highlight">Phone</span> Finder</h1>
</div>
<nav>
<ul>
<li><a href="responsive.html">Home</a></li>
<li><a href="home.html">About</span></a></li>
<li><a href="suggest.php"><span class="current">Suggestions</span></a></li>
</ul>
</nav>
</div>
</header>
</div>
</section>
<section id="adder">
	<?php 
	include ('error.php');
	?>
	<div class="container1">
		<div class="box1">
			<form method="post" action="suggest.php">
				<h3>Brand</h3>
				<input type="text" name="brand" >
				<h3>Cost</h3>
				<input type="text" name="cost" >
				<h3>Camera</h3>
				<input type="text" name="camera" >
				<h3>Ram</h3>
				<input type="text" name="ram" >
				<h3>Rom</h3>
				<input type="text" name="rom" >
					<input type="submit" name="add" value="ADD TO LIST">
			</form>
		</div>
	</div>
</section>
</body>
</html>
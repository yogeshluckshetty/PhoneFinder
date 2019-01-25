<html>
<?php
include ('connectC.php');
?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Phone Finder/Welcome</title>
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
					<li><a href="index.php"><span class="current">Home</span></a></li>
					<li><a href="about.html">Where to Buy?</a></li>
					<li><a href="suggest.php">Suggestions!</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section id="showcase">
		<div >
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/la.jpg">
      <div class="carousel-caption">
        <h3>OnePlus5</h3>
          <p>Rs-32,999</p>
      </div>
    </div>

    <div class="item">
      <img src="img/mi6.PNG">
      <div class="carousel-caption">
        <h3>Mi 6</h3>
            <p>Rs-23,999</p>
        </div>
    </div>

       <div class="item">
      <img src="img/note8big.PNG">
      <div class="carousel-caption">
        <h3>Note-8</h3>
          <p>Rs-76,000</p>
      </div>
    </div>
    
        <div class="item">
      <img src="img/iphone%207.PNG">
      <div class="carousel-caption">
        <h3>Iphone-7</h3>
          <p>Rs-45,000</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	</section>
	<!--<section id="newsletter">
		<div class="container">
			<h1>Subscribe To Our Newletter</h1>
			<form>
				<input type="email" placeholder="Enter Email">
				<input type="submit" value="Subscribe">
			</form>
		</div>
	</section>-->
	<section id="filter">
			<ul>
				<form method="post" action="indexC.php">
					<li><span class="namef">Cost</span>
					<ul>
						<li><input type="checkbox" name="cost1" value=">10000">0-10,000</li>
						<li><input type="checkbox" name="cost2" value=">10000 and `Cost`<20000">10,000-20,000</li>
						<li><input type="checkbox" name="cost3" value=">20000 and `Cost`<30000">20,000-30,000</li>
						<li><input type="checkbox" name="cost4" value=">30000"> Above 30000</li>
					</ul>
					</li>
					<li><span class="namef">Brand</span>		
					<ul>
						<li><input type="checkbox" name="brand1" value="Apple">Apple</li>
						<li><input type="checkbox" name="brand2" value="Asus">Asus</li>
						<li><input type="checkbox" name="brand3" value="Lenovo">Lenovo</li>
						<li><input type="checkbox" name="brand4" value="Mi">Mi</li>
						<li><input type="checkbox" name="brand5" value="Samsung">Samsung</li>
					</ul>
					</li>
					<li><span class="namef">Rom</span>		
					<ul>
						<li><input type="checkbox" name="rom1" value="=8">8GB</li>
						<li><input type="checkbox" name="rom2" value="=16">16GB</li>
						<li><input type="checkbox" name="rom3" value="=32">32GB</li>
						<li><input type="checkbox" name="rom4" value=">=64">64GB and above</li>
					</ul>
					</li>
					<li><span class="namef">Ram</span>		
					<ul>
						<li><input type="checkbox" name="ram1" value="=2">2GB</li>
						<li><input type="checkbox" name="ram2" value="=3">3GB</li>
						<li><input type="checkbox" name="ram3" value="=4">4GB</li>
						<li><input type="checkbox" name="ram4" value=">=6">6GB and above</li>
					</ul>
					</li>
					<li><span class="namef">Camera</span>		
					<ul>
						<li><input type="checkbox" name="cam1" value="=5">5MP</li>
						<li><input type="checkbox" name="cam2" value="=8">8MP</li>
						<li><input type="checkbox" name="cam3" value="=12">12MP</li>
						<li><input type="checkbox" name="cam4" value=">=21">21MP and above</li>
					</ul>
					</li>
					<li><span class="namef">FrontCamera</span>		
					<ul>
						<li><input type="checkbox">2MP</li>
						<li><input type="checkbox">5MP</li>
						<li><input type="checkbox">8MP</li>
						<li><input type="checkbox">!6MP and above</li>
					</ul>
					</li>
					<li><span class="namef">Android</span>		
					<ul>
						<li><input type="checkbox">KitKat</li>
						<li><input type="checkbox">Lollypop</li>
						<li><input type="checkbox">Marshmellow</li>
						<li><input type="checkbox">Nougat</li>
					</ul>
					</li>
					<li><span class="namef">SimSlots</span>		
					<ul>
						<li><input type="checkbox">Single</li>
						<li><input type="checkbox">Double</li>
					</ul>
					</li>
					<li><span class="namef">ScreenSize</span>		
					<ul>
						<li><input type="checkbox">4.5 inches</li>
						<li><input type="checkbox">5 inches</li>
						<li><input type="checkbox">5.5 inches</li>
						<li><input type="checkbox">6 inches and above</li>
					</ul>
					</li>
					<li><input type="submit" name="apply" value="Apply"></li>
				</form>
			</ul>
		</section>
	<section id="boxes">
		<div class="container">
			<div class="box">
				<img src="img/h8.jpeg">
				<h3>Honor 8 Lite</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/redminote4.jpeg">
				<h3>Redmi Note 4</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/motog5p.jpeg">
				<h3>Moto G5 Plus</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/j7prime.jpg">
				<h3>Samsung J7 Prime</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/max2.jpeg">
				<h3>Mi Max 2</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/i5.jpeg">
				<h3>Iphone 5s</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/i6.jpeg">
				<h3>Iphone 6</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/selfie.jpeg">
				<h3>Asus Zenfone Selfie</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
			<div class="box">
				<img src="img/asus.jpeg">
				<h3>Asus Zenfone Max</h3>
				<p>Pellentesque eu fringilla velit, eu molestie mi. Nullam dapibus purus non velit gravida, nec ultrices dolor efficitur. Nulla dui nibh, convallis ut placerat eu, lacinia eu quam</p>
			</div>
		</div>
	</section>
</body>
</html>


<?php
session_start();
if(!isset($_SESSION['user'])){
	$message = "not logged in";
    echo "<script>alert('$message')";
    header('location:user_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save earth</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
<div id="nav" class="mydiv">
	<ul>
	  <li><a href="user_dash.php">Home</a></li>
	  <li><a href="about_us.php">About&nbsp;us</a></li>
	  <li><a href="user_event.php">Events</a></li>
	  <li><a href="gallery.php">Gallery</a></li>
	  <li><a href="suggestion.php">Suggestion</a></li>
	  <li><a href="contact_us.php">Contact us</a></li>
	<!--   <li><a href="review.php">Review</a></li> -->
	  <li><a href="logout.php">logout</a></li>
	</ul>
</div>
<!-- billboard -->

<div class="billboard">
	<h1>Facts about climate changes</h1>
	   <video autoplay muted loop id="myVideo">
  <source src="./images/cloud.mp4" type="video/mp4">
</video>

</div>

<!-- section 2 -->
<div class="column-wrapper clearfix" id="section2">
<section class="main-col">
	<h2>Greenhouse gas levels are at an all-time high</h2>
	<p>There are more greenhouse gases in the atmosphere than ever before, and that’s causing the earth’s temperature to rise.The burning of fossil fuels, emissions from transport, and the environmental impact of intensive farming have all contributed to high levels of CO2 in our atmosphere. And scientists say this is the fastest and largest increase in CO2 the world has ever seen.</p>
	
</section>
<section class="sidebar-col">
	<img src="./images/vector.svg" width="400" height="300">
</section>
</div>
<!-- section 1 -->
<div class="column-wrapper clearfix" id="section1">
<section class="rmain-col">
	
	<img src="./images/city.svg" width="400" height="300">
</section>
<section class="lsidebar-col">
	<h2>Climate change is creating a refugee crisis</h2>
	<p>As global temperatures increase, millions of people are fleeing their homes to avoid the impacts of droughts and extreme storms. And these numbers are set to rise. The International Organisation on Migration estimates that up to 200 million people could be displaced by climate change by 2050.Around 50% of all carbon emissions are emitted by the richest 10% of the world’s population. Yet global warming is making climate change refugees of the world’s poorest.</p>
	
</section>
</div>
<!-- section 3 -->
<div class="column-wrapper clearfix" id="section3">
<section class="main-col">
	<h2>More than 1 million species face extinction</h2>
	<p>While the expected rate of species extinction is usually around 5 species a year, we’re currently losing up to 10,000 times the normal rate – this means that dozens of species go extinct every single day.
This loss of biodiversity reduces water quality and food security, and also results in a loss of natural pest control as predators like frogs and spiders become extinct.</p>
	 
</section>
<section class="sidebar-col">
	<img src="./images/animal.png" width="400" height="300">
</section>
</div>
<!-- section 4 -->
<div class="column-wrapper clearfix" id="section4">
<section class="rmain-col">
	
	<img src="./images/island.png" width="400" height="300">
</section>
<section class="lsidebar-col">
	<h2>Our oceans are dying</h2>
	<p>Our planet is only as healthy as its oceans. And the UN has warned that marine life faces irreparable damage from the millions of tonnes of plastic waste that ends up in the oceans every year.
Half of the world’s coral reefs have died in the last 30 years, and two thirds of the Great Barrier Reef have been damaged by coral bleaching – this happens when the sea temperature is too high.
Whales, dolphins, porpoises and sea lions all suffer from bycatch from global fishing. In fact, hundreds of thousands of marine mammals are accidentally caught or critically injured by fishing gear every year.</p>
	<a href="#section1">Go Up</a>
</section>
</div>
</body>
</html>
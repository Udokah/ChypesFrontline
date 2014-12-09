<!doctype html>
<html>
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="Content-Language" content="en-US" >
<meta name="Keywords" content="building , construction , design , construction company " >
<meta name="Description" content="Chypes Frontline Nig. LTD is a builiding contruction cosortium founded with the unique mission of bridging whatever gap exists between consultancy and contracting in the construction industry." >
<link rel="icon" href="img/logo.png" >
<title>Chypes Frontline NIG LTD - Design and Building Construction</title>
<link type='text/css' href='css/style.css' rel='stylesheet' >

<script src='js/jquery-1.9.1.min.js' type='text/javascript'></script>

<!-- the nicescroll script -->
<script type="text/javascript" src="plugins/nicescroll/nicescroll.min.js"></script>
<script type="text/javascript" src="plugins/nicescroll/nicescroll.plus.js"></script>

<script src='js/script.js' type='text/javascript'></script>
</head>
<body>
<div class="wrapper">

<div class="header">
<table><tr><td class="green">&nbsp;</td><td>&nbsp;</td><td class="purple">&nbsp;</td></tr></table>

<div class="logo">
<img src="img/logo.png" align="bottom" alt="Chypes Frontline Logo" />
<span>Chypes Frontline <br />
<label>Design + Build | Building Construction</label></span>
</div>

<div class="nav">
<ul>
<li><a href="index.php" class="current" >home</a></li>
<li><a href="services.php">services</a></li>
<li><a href="about.php">about</a></li>
<li><a href="work.php">our work</a></li>
</ul>
</div>

<div class="clear"></div>
</div>

<div class="middle-top">
<script>
     $(document).ready(function(){
	 $(".slide > div:gt(0)").hide();
	 setInterval(function() { 
     $('.slide > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.slide');
    },  5000);
    });
	
</script>
<div class="slide">
<?php
//path to directory to scan
$directory = 'img/slide/';
//get all image files with a .jpg extension.
$images = glob($directory . "*.jpg");
//print each file name
foreach($images as $image) { echo "<div><img src='$image'  alt='slide'  /></div>" ; }
?>
</div>

<div class="about">
<div class="holder">
<h2>Who we are</h2>
<p><strong>Chypes Frontline Nig. LTD</strong> is a builiding contruction cosortium founded with the unique mission of bridging whatever gap
exists between consultancy and contracting in the construction industry. Using modern management concepts and assemblage of young highly dynamic, talented and highly experienced professionals drawn form the various fields of the construction industry, it is able to harmonize the various contending, sometimes divergent tendencies that frequently crop up during the process of actualizing a mere concept into build form.....</p> <a href="./About-Us">continue reading &raquo;</a>
</div>
</div>

<div class="clear"></div>
</div>

<div class="middle-bottom">
<h1>Our Strenght <span>the following principal factors are the fulcrum of our expertise.</span></h1>
<table >
<tr>
<td>
<label>team work</label>
<p>The technical team of our work force combines with other levels of the technical crew engages in far 
reaching discussion and analysis on a particular job before work commences at the site.<br> Our relationship with our clients, suppliers etc, create an enabling environment to shared clear vision, respected openness, trust and responsibility</p>
</td>
<td>
<label>our integrity</label>
<p>We are committed to high ethical standards and sound business integrity in all our operations, this have helped us in establishing effective relationship between our clients and us.</p>
</td>
<td>
<label>professionalism</label>
<p>We pride our self with professionally sound engineers who have attained various heights in their respective fields. We also give supportive services to other contractors as subcontractors to enable us remain in practice and prove our expertise continually.</p>
</td>
</tr>
</table>
</div>

<div class="footer">
<?php include('inc/footer.php'); ?>
</div>

</div><!-- end of main wrapper -->
</body>
</html>
<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<style>
	.redirect-overlay{
		position:absolute;
		height: 100%;
		width: 100%;
		opacity: 0.8;
		top:0;
		left:0;
		background:#ccc;
	}

	.overlay-box{

		position:absolute;
		height: 20%;
		width: 60%;
		opacity: 1;
		top:0;
		left:0;
		background:white;
		margin-left:20%;
		margin-top: 200px;
		z-index: 9999;
		padding:10px;
		text-align: center;
		font-size: 15px;
		box-shadow: 1px 1px 1px 1px gray;
		line-height: 30px;
		min-height: 300px;
	}

	.overlay-text{
		font-size: 14px;
		padding-left: 10%;
		padding-right: 10%;
		padding-top: 20px;
	}

	#redirect-title{
		float:left;
		width: 50%;
		padding-right: 20px;
		padding-left:20px;
	}

	@media screen and (max-width: 600px){
		.overlay-box{
			margin-top: 100px;
			width: 100%;
			margin-left:0;
			line-height: 30px;
			min-height: 600px;
			margin-right: 50px;
		}

		#ieeelogo{
			display: none;
		}

		#csslogo{
			display: none;
		}
		#redirect-title{
			width: 80%;
		}
	}

</style>

<script type="text/javascript">
	
 	var count = 30

 	window.setInterval(function(){
 		count = count - 1;
 		document.getElementById("count").innerHTML = count
 	}, 1000);

	window.setTimeout(function() {
		location.href = 'index.php';
		}, 30000);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84916499-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="redirect-overlay"></div> 
<div class="overlay-box" style="padding-top: 50px;font-size: 25px;padding-bottom:50px;">
	<img id="ieeelogo" src="images/ieee-logo.png" style="width:20%;float:left;margin-left:5%;margin-top:1%;"></img>
	<div id="redirect-title">Looking for 2017 IEEE Multi-Conference on Systems and Control? </div>
	<img id="csslogo" src="images/css-logo.png" width="80px" style="float:left"></img>
	<br><br>
	<div class="overlay-text" style="clear:both;line-height: 20px;text-align: left">
		The last IEEE MSC event was held in 2016, and the IEEE Control Systems Society has "re-branded" the successful MSC series. All past participants of the
		<ul style="list-style: initial; margin-top:10px;margin-bottom: 10px">
			<li style="margin-left:30px">IEEE Conference on Control Applications (CCA) </li>
			<li style="margin-left:30px">IEEE International Symposium on Intelligent Control (ISIC)</li>
			<li style="margin-left:30px">IEEE Conference on Computer-Aided Control Systems Design (CACSD)</li>
			</ul>
		are encouraged to consider the new <strong>2017 IEEE Conference on Control Technology and Applications</strong>, the first of which is to be held in Hawaii in 2017.

	</div>

	<div style="font-size: 18px;margin-right: 10px">
		For more information <a style="color:red;text-decoration: underline;" href="index.php">go to the CCTA2017 website.</a> 
	</div>
	<div style="font-size: 12px;font-style:italic;margin-right: 10px;">You will be redirected to the CCTA2017 website in <span id="count">30</span> seconds...</div>

</div>


<div class="text">
	The inaugural 2017 IEEE Conference on Control Technology and Applications will be held on the beautiful Big Island of Hawai'i. This new conference, sponsored by the IEEE Control Systems Society, follows in the evolution of the former IEEE CCA to recent successful MSC venues, the last of which was held in 2016. The CCTA 2017 technical program will feature the presentation of contributed and invited papers, as well as tutorial sessions and workshops, focusing on technological advances and applications of control engineering. This focus includes all aspects of control engineering for practical control systems, from analysis and design, through simulation and hardware. Major themes of energy, healthcare, manufacturing, and transportation will feature applications of control technology for robotic, automotive, biomechanical, aerospace, power and energy systems, control of networks, and many others.
	<br><br>
	CCTA 2017 will be held at the Mauna Lani Bay Hotel and Bungalows on the Big Island. The venue is a medium-sized, serene  property on the west Kohala Coast, and the organizers have negotiated reasonable room rates which include all resort amenities. The Big Island of Hawai'i offers an abundance of natural beauty and sites, with 11 of the world's 13 climate zones. With a land mass of nearly twice the size of all other Hawaiian Islands combined, but with only a small fraction of the state's population, its diverse terrain spans green and black sand beaches to lush rainforests and waterfalls, and two active volcanoes within Volcanoes National Park.
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/hotel/hotel1.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel2.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel3.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel4.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/hotel/hotel5.jpg) 150px 150px"></div>
</div>	


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
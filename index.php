<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

 
<?php 
	echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
?>

<script type="text/javascript">
	$(document).ready(function(){
		
		var newsCounter = 0

		setInterval(function(){
			
			if(newsCounter + 1 > config.newsTicker.length-1){
				newsCounter = 0
			}else{
				newsCounter++
			}
			
			$('#news-ticker-link').fadeOut(500, function(){
				$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
				$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
				$('#news-ticker-link').fadeIn(500, function(){
				})
			})
			
		}, 5000)

		
	})
</script>

<!-- <div id="news-ticker" style="color:gray;background:white;padding:15px;margin:10px;border-radius:10px;box-shadow:2px 2px 2px 2px #ccc;margin-top:-20px;margin-bottom:20px; ">
		<p style="padding:0;margin:0;font-size:smaller">
			<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
			<span id="news-ticker-content">
				<a id="news-ticker-link" href="#">Click here for nomination for best student papers</a>
			</span>
		</p>
</div> -->

<div class="text">

<!-- 	<div style="font-size:30px;color:red;padding:20px; line-height: 30px;"> Paper Submission Deadline Extended to March 10!</div> -->

	On January 1, 2018, the IEEE Blockchain initiative was born, marking a new era for blockchain-related activities within IEEE. Under the guidance of Professor Liu Erwu from Tongji University, the Asia-Pacific and China regions have seen substantial growth, boasting 18 working groups that drive innovation and collaboration across Shanghai, Beijing, Shenzhen, Hangzhou, Hong Kong, and Macau/Guangzhou.
	<br><br>
	The year 2024 will witness a monumental event—the IEEE World Blockchain Conference in China. This event will not only focus on the technological advances but will also serve as a platform for sharing research, fostering international collaborations, and highlighting China's commitment to open, inclusive, and innovative technological advancements.
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/blockchain/blockchain1.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain2.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain3.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain4.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain5.png) 150px 150px"></div>
</div>	


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
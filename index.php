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

	The inaugural 2017 IEEE Conference on Control Technology and Applications will be held on the beautiful Big Island of Hawai'i. This new conference, sponsored by the IEEE Control Systems Society, follows in the evolution of the former IEEE CCA to recent successful MSC venues, the last of which was held in 2016. The CCTA 2017 technical program will feature the presentation of contributed and invited papers, as well as tutorial sessions and workshops, focusing on technological advances and applications of control engineering. This focus includes all aspects of control engineering for practical control systems, from analysis and design, through simulation and hardware. Major themes of energy, healthcare, manufacturing, and transportation will feature applications of control technology for robotic, automotive, biomechanical, aerospace, power and energy systems, control of networks, and many others. <a href="plenary-speakers.php" style="color:red">Plenary lectures</a> focused on conference themes will be delivered on Monday and Wednesday as part of the conference program.
	<br><br>
	CCTA 2017 will be held at the Mauna Lani Bay Hotel and Bungalows on the Big Island (<a target="_blank" style="color:red" href="http://www.maunalani.com/experience/hawaii-hotel-photos">photos and videos here</a>). The venue is a medium-sized, serene  property on the west Kohala Coast, and the organizers have negotiated reasonable room rates which include all resort amenities. The Big Island of Hawai'i offers an abundance of natural beauty and sites, with 11 of the world's 13 climate zones. With a land mass of nearly twice the size of all other Hawaiian Islands combined, but with only a small fraction of the state's population, its diverse terrain spans green and black sand beaches to lush rainforests and waterfalls, and two active volcanoes within Volcanoes National Park.
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
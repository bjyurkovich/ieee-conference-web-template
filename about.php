<?php 
$pageTitle='about'; //THIS MUST BE SET FOR EACH PAGE
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

<div class="flex flex-auto" style="padding-top: 1%">
<div style="margin-bottom: 1%;">

<h1>about IEEE GBC</h1>
IEEE GBC is one of two IEEE Blockchain Community’s flagship conferences. The 2024 IEEE Global Blockchain Conference will be held in Shanghai, China, from 21 August - 23 August 2024. Themed “Transforming a Trustworthy Digital Future”, the conference will feature a comprehensive high-quality technical program including 6 tracks and a variety of tutorials and workshops. IEEE GBC 2024 will also include an attractive industry program aimed at practitioners, with keynotes and panels from prominent research, industry and government leaders, business and industry panels, and technological exhibits. GBC 2024 is planned to be a fully physical meeting/event.<br/><br/>
<br/>


<h1>About IEEE</h1>
The IEEE (Institute of Electrical and Electronics Engineers, Inc.) is the world’s largest technical professional society. Through its more than 400,000 members in 150 countries, the organization is a leading authority on a wide variety of areas ranging from aerospace systems, computers and telecommunications to biomedical engineering, electric power, and consumer electronics. Dedicated to the advancement of technology, the IEEE publishes 30 percent of the world’s literature in the electrical and electronics engineering and computer science fields, and has developed nearly 900 active industry standards. The organization annually sponsors more than 850 conferences worldwide. Learn more at www.ieee.org.<br/>
<br/>


</div>
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

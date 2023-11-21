<?php $json = json_decode(file_get_contents('configuration/config.json'), true); ?>

</div>
			</div>
			<div id="right-bar" class="flex flex-column col-2" style="background: whitesmoke">
				<div id="top" class="flex">
					<div style="color:white;width:0;height:0;border-top:40px solid transparent;border-bottom: 40px solid transparent;border-left: 40px solid #191970;">
					</div>
					<div class="close-dates"><a href="#" style=""><i class="fa fa-2x fa-arrow-circle-right" aria-hidden="true"></i></a></div>
					<div id="title" class="bold">IMPORTANT DATES</div>
				</div>
 				<div id="content" class="flex-auto">
	 				<ul class="list-reset">
	 					<?php 
	 						//Print out all the deadlines from the config file
	 						$dates = $json['dates'];
	 						for ($i = 0; $i < count($dates); $i++) {
	 							if($dates[$i]['showInNavBar']){
	 								echo '<li>
										<div class="title">'.$dates[$i]['title'].'</div>
										<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> 
											'.$dates[$i]['date'].'</div>
									</li>';
	 							}
							} 

	 					?>
	 					<li style="font-size:small;color:red;text-transform:uppercase;cursor:pointer"><a target="_blank" href="">Stay tuned!</a></li>
					</ul>
				</div>
				

			</div>
		</div>
		

		<div id="footer" class="flex-column">
				<div id="link-section" class="flex flex-wrap">
					<div class="footer-items left flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['firstSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
	 							if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
					<div class="footer-items right flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['secondSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
							    if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
					<div class="footer-items left flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['thirdSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
							    if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
					<div class="footer-items right flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['fourthSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
							    if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
				</div>
				<div id="bottom-section" class="flex justify-center">
					<div class="center">
						&copy IEEE <?php echo $json['meta']['conferenceName'] ?>
						<br><br>
						<a target="_blank" href="<?php echo $json['socialMediaLinks']['facebook'] ?>"><i class="fa fa-3x fa-facebook"></i></a>
						<a target="_blank" href="<?php echo $json['socialMediaLinks']['twitter'] ?>"><i class="fa fa-3x fa-twitter"></i></a>
						<!-- <a target="_blank" href="<?php echo $json['socialMediaLinks']['linkedin'] ?>"><i class="fa fa-3x fa-linkedin"></i> </a> -->
					</div> 
					<div class="">
						
					</div>
					
				</div>
		
		</div>
	</div>
	
	

 </body>
 </html>
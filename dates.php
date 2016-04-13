<?php 
$pageTitle='Dates and Deadlines'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/dates.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<div class="dates-container">
	<ul>
		<?php 
			//Print out all the deadlines from the config file
			$dates = $json['dates'];
			for ($i = 0; $i < count($dates); $i++) {
		    echo '<li>
					<div class="title">'.$dates[$i]['title'].'</div>
					<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> 
						'.$dates[$i]['date'].'</div>
				</li>';
		} 
		?>
	</ul>

</div>


<?php require 'right-bar-footer.php'; //THIS MUST BE INCLUDED FOR EACH PAGE ?>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" rel='stylesheet' type='text/css'>
	<link href="https://unpkg.com/basscss@8.0.1/css/basscss.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		html, body, .main-container{
			font-family: 'Open Sans', sans-serif;
			height: 100%;
			overflow-x: hidden;
		}
			
		.bars, .dates{
			display: none;
		}
		#content-container .left-bar li[name=back]{
		    display: none;
		}
		.close-dates{
			display: none;
		}

		#header{
			height:300px;
			color:#191970;
		}
		#header:after{
			content : "";
		    display: block;
		    position: absolute;
		    top: 0px;
		    left: 0;
		    background-image: url(images/hotel1-banner.jpg); 
		    width: 100%;
		    height: 300px;
		    opacity : 0.4;
		    z-index: -2;
		    background-position: right -550px top -310px;
		}
		#header #header-title-container{
			padding: 10px 5%;
		}
		#header #header-title-container .header-title{
			margin-top: 1%;
			font-size: 60px;
		}
		#header #header-title-container .header-title img{
			width:200px;
			vertical-align: middle;
			margin-right: 5px;
		}
		#header #header-title-container .header-title .ieee-logo{
			width:100px;
			height: 100px;
			background-size: url(images/ieee-logo.png)
			background-size: 100px;
		}
		#header #header-quick-links{
			padding-left: 5%;
		}
		#content-container{
			min-height:70%;
		}
		#content-container .left-bar{
			width: 100%;
			padding: 0;
			background: #191970;
			font-weight: normal;
			padding-top: 0px;
			
		}
		#content-container .left-bar ul{
			margin: 0;
			padding: 0;
		}
		#content-container .left-bar li{
			width: 100%;
			padding: 12%;
			color: white;
			*border-bottom: 1px solid whitesmoke;
		}
		#content-container .left-bar li:hover{
			background: whitesmoke;
			color: #191970;
			cursor: pointer;
		}
		#content-container .left-bar a i{
			margin-right:10px;
		}
		#center-content{
			background: whitesmoke;
		}

		.main-content{
			padding: 5%;
			line-height: 20px;
			font-size: medium
		}
		.main-content #images{

		} 
		.main-content #images .about-image{
			width: 150px;
			height: 150px;
			margin-right: 1%;
			border-radius: 50%;
		}
		.main-content .text{
			margin-bottom:1%;
		}

		#right-bar{
			
		}
		#right-bar #top{
			height: 80px;
			width: 100%;
		}
		#right-bar #top #title{
			padding: 30px 0 20px 10px;
			font-size: medium;
			color: #8C001A;
		}
		#right-bar #content{
			font-size: small;
			border-left: 1px solid #ccc;
		}
		#right-bar #content ul{
			margin-top: 10px;
			padding-left: 10px;
			padding-right: 5px;
		}
		#right-bar #content ul li{
			padding: 5% 0 5% 0;
		}
		#right-bar #content ul li .date{
			padding-top: 5px;
			color: #8C001A;
		}
		#right-bar #content ul li .title{
			font-size: medium;
		}

		#footer{
			background: #191970;
			width: 100%;
			min-height: 200px;
			color: white;
			padding: 2%;
		}
		#footer #link-section{
			padding-bottom: 15px;
			border-bottom: 1px solid whitesmoke;
		}
		#footer #link-section .title{
			font-size: large;
			text-align: left;
		}
		#footer #link-section ul{
			font-size: small;
			text-align: left;
		}
		#footer #link-section ul li{
			padding-top: 10px;
		}
		
		#footer #bottom-section{
			margin-top: 30px;
			font-size: x-small;
		}
		#footer #bottom-section i{
			padding-right: 20px;
		}
		#footer #bottom-section ul li{
			padding-top: 20px;
			text-align: center;
		}


		.slide-back{
			display: none;
		}


		button{
			background: #191970;
			border: 0;
			padding: 1% 2% 1% 2%;
			color: white;
			text-transform: uppercase;
			font-size: medium;
			min-width: 150px;
			margin-right: 1%;
		}
		button:hover{
			cursor: pointer;
			background: whitesmoke;
			color:#191970;
		}

		a{
			color: inherit;
			text-decoration: none;
			font-size: inherit;
		}

		@media screen and (max-width: 600px){
			#page-title{
				margin-top: 15px;
			}
			#header #header-title-container .header-title{
				font-size: x-large;
			}
			#header #header-title-container .header-title img{
				width:120px;
				vertical-align: middle;
				margin-right: 5px;
			}
		    #header #header-title-container{
		    	text-align: center;
		    	padding: 30px 5%;
		    }

			#header:after{
				background-position: right -250px top -510px;
			}

		    #header #header-quick-links{
		    	justify-content: center;
		    }
		   /* #content-container .left-bar{
		    	display: none;
		    }*/
		    #left-bar-container{
		    	display: none;
		    	position: fixed;
		    	top: 0;
		    	left: 0;
		    	transition: width 0.3s ease;
		    }
		    #content-container .left-bar ul{
		    	padding-bottom: 100px;
		    }
		    #content-container .left-bar li{
		    	width: 76%;
		    	padding-top: 35px;
		    	padding-bottom: 35px;
		    }
		    #content-container .left-bar li[name=back]{
		    	padding-top: 20px;
		    	padding-bottom: 5px;
		    	display: block;
		    }
		    #right-bar{
				display: none;
				position: fixed;
		    	top: 0;
		    	right: 0;
		    	box-shadow: 2px 2px 2px 2px #282828;
			}
			#footer #link-section .footer-items{
				padding-top: 20px;
				margin-right: 20px;
				min-width: 150px;
				margin-left: 15px;
			}
			#footer #link-section .title{
				color: #6698FF;
			}
			button{
				min-width: 100px;
				min-height: 50px;
			}
			.bars{
				position: fixed;
				top: 30px;
				left: 20px;
				color:#191970;
				display: block;
			}
			.dates{
				position: fixed;
				top: 30px;
				right: 25px;
				color:#191970;
				display: block;
			}
			#left-bar-container:target{
				/*transition: width 0.3s ease;*/
				display: block;
				width: 80%;

			}
			#right-bar:target{
				display: block;
				width: 80%;
			}
			.slide-back{
				display: inline-block;
				float: right;
			}
			.close-dates{
				display: block;
				color: #8C001A;
			}

		}



	</style>
</head>
<body>
	<div class="flex-column main-container">
		<div id="header" class="flex-auto">
			<div class="bars"><a href="#left-bar-container"><i class="fa fa-2x fa-bars"></i></a></div>
			<div class="dates"><a href="#right-bar"><i class="fa fa-2x fa-calendar"></i></a></div>
			<div id="header-title-container">
				<div class="header-title bold flux-auto" style=""><img src="images/ieee-logo.png" style=""></img><div style="vertical-align: middle;display: inline-block;">CCTA 2017</div></div>
				<div class="header-title bold" style="font-size: x-large;">1st IEEE Conference on Control Technology and Applications</div>
				<div class="header-title bold" style="font-size: large;">August 27-30, 2017</div>
				<div class="header-title bold" style="font-size: medium;">The Mauna Lani Bay Hotel and Bungalows <br> Kohala Coast, Hawai'i</div>
			</div>
			<div id="header-quick-links" class="flex flex-wrap">
				<button>HOTEL</button>
				<button>AUTHORS</button>
				<button>DATES</button>
			</div>
		</div>
		<div id="content-container" class="flex flex-auto flex-space-between">
			<div id=left-bar-container class="flex flex-auto col-2">
				<ul class="left-bar list-reset">
					<li name="back" class="bold" style="font-size: x-large">IEEE CCTA2016<a href="#" class="slide-back"><i class="fa fa-lg fa-arrow-circle-left" aria-hidden="true"></i></a></li>
					<li name="home"><a><i class="fa fa-lg fa-home" aria-hidden="true"></i>HOME</a></li>
					<li name="organizers"><a><i class="fa fa-lg fa-users" aria-hidden="true"></i>ORGANIZERS</a></li>
					<li name="authors"><a><i class="fa fa-lg fa-pencil-square-o" aria-hidden="true"></i>AUTHORS</a></li>
					<li name="events"><a><i class="fa fa-lg fa-calendar" aria-hidden="true"></i>EVENTS</a></li>
					<li name="registration"><a><i class="fa fa-lg fa-sign-in" aria-hidden="true"></i>REGISTRATION</a></li>
					<li name="hotel"><a><i class="fa fa-lg fa-bed" aria-hidden="true"></i>HOTEL</a></li>
					<li name="visa-information"><a><i class="fa fa-lg fa-globe" aria-hidden="true"></i>VISA INFORMATION</a></li>
				</ul>
			</div>
			<div id="center-content" class="flex flex-auto flex-column col-7">
				<div class="flex">
					<div style="height:80px;background:#191970;color:white;width: 100%">
						<div id="page-title" style="padding:3%;font-weight:bold;font-size: x-large"><i class="fa fa-3 fa-long-arrow-right" aria-hidden="true"></i> WELCOME</div>
					</div>
				</div>
				<div class="main-content flex-auto">
			
					<div class="text">
						The inaugural 2017 IEEE Conference on Control Technology and Applications will be held on the beautiful Big Island of Hawai'i. This new conference, sponsored by the IEEE Control Systems Society, follows in the evolution of the former IEEE CCA to recent successful MSC venues, the last of which was held in 2016. The CCTA 2017 technical program will feature the presentation of contributed and invited papers, as well as tutorial sessions and workshops, focusing on technological advances and applications of control engineering. This focus includes all aspects of control engineering for practical control systems, from analysis and design, through simulation and hardware. Major themes of energy, healthcare, manufacturing, and transportation will feature applications of control technology for robotic, automotive, biomechanical, aerospace, power and energy systems, control of networks, and many others.
						<br><br>
						CCTA 2017 will be held at the Mauna Lani Bay Hotel and Bungalows on the Big Island. The venue is a medium-sized, peaceful  property on the west Kohala Coast, and the organizers have negotiated reasonable room rates which include all resort amenities. The Big Island of Hawai'i offers an abundance of natural beauty and sites, with 11 of the world's 13 climate zones. With a land mass of nearly twice the size of all other Hawaiian Islands combined, but with only a small fraction of the state's population, its diverse terrain spans green and black sand beaches to lush rainforests and waterfalls, and two active volcanoes within Volcanoes National Park.
					</div>

					<div id="images" class="flex flex-wrap justify-center">
						<div class="about-image" style="background: url(images/hotel/hotel1.jpg) 150px 150px"></div>
						<div class="about-image" style="background: url(images/hotel/hotel2.jpg) 150px 150px"></div>
						<div class="about-image" style="background: url(images/hotel/hotel3.jpg) 150px 150px"></div>
						<div class="about-image" style="background: url(images/hotel/hotel4.jpg) 150px 150px"></div>
						<div class="about-image" style="background: url(images/hotel/hotel5.jpg) 150px 150px"></div>
					</div>	
				</div>
			</div>
			<div id="right-bar" class="flex flex-column col-2" style="background: whitesmoke">
				<div id="top" class="flex">
					<div style="color:white;width:0;height:0;border-top:40px solid transparent;border-bottom: 40px solid transparent;border-left: 40px solid #191970;">
					</div>
					<div class="close-dates"><a href="#" style=""><i class="fa fa-2x fa-arrow-circle-right" aria-hidden="true"></i></a></div>
					<div id="title" class="bold">IMPORTANT DATES</div>
				</div>
				<!-- Paper submissions site css.paperplaza.net opens	 	December 15, 2016
	Deadline for submission of Invited Session proposals	 	March 1, 2017
 	Deadline for submission of contributed and invited papers	 March 1, 2017
 	Notification of acceptance/rejection (upload and register)	 June 1, 2017
 	Deadline for final submission of all papers	 		July 1, 2017 -->
 				<div id="content" class="flex-auto">
	 				<ul class="list-reset">
						<li>
							<div class="title">Paper Submission Opens</div>
							<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> December 15, 2016</div>
						</li>
						<li>
							<div class="title">Invited Session Proposals Due</div>
							<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> March 1, 2017</div>
						</li>
						<li>
							<div class="title">Contributed and Invited Papers Due</div>
							<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> March 1, 2017</div>
						</li>
						<li>
							<div class="title">Notification of Acceptance</div>
							<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> June 1, 2017</div>
						</li>
						<li>
							<div class="title">Final Submissions Due</div>
							<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> July 1, 2017</div>
						</li>
					</ul>
				</div>
				

			</div>
		</div>
		

		<div id="footer" class="flex-column">
				<div id="link-section" class="flex flex-wrap">
					<div class="footer-items left flex-auto">
						<div class="title">CONFERENCE</div>
						<ul class="list-reset">
							<li>Program</li>
							<li>Map</li>
							<li>Speakers</li>
							<li>Events</li>
							<li>Sessions</li>
						</ul>
					</div>
					<div class="footer-items right flex-auto">
						<div class="title">DESTINATION</div>
						<ul class="list-reset">
							<li>Hotel</li>
							<li>Recommended Sights</li>
							<li>Conference Deals</li>
							<li>The Big Island</li>
							<li>Flights</li>
						</ul>
					</div>
					<div class="footer-items left flex-auto">
						<div class="title">AUTHOR LINKS</div>
						<ul class="list-reset">
							<li>Papercept Plaza</li>
							<li>Author Information</li>
							<li>IEEE Guidelines</li>
							<li>Templates</li>
							<li>IEEE Xplorer</li>
						</ul>
					</div>
					<div class="footer-items right flex-auto">
						<div class="title">SITEMAP</div>
						<ul class="list-reset">
							<li>Home</li>
							<li>Organizers</li>
							<li>Visa Information</li>
							<li>Events</li>
							<li>Registration</li>
						</ul>
					</div>
				</div>
				<div id="bottom-section" class="flex justify-center">
					<div class="center">
						&copy IEEE CCTA 2017
						<br><br>
						<i class="fa fa-3x fa-facebook"></i>
						<i class="fa fa-3x fa-twitter"></i> 
						<i class="fa fa-3x fa-linkedin"></i> 
					</div> 
					<div class="">
						
					</div>
					
				</div>
		
		</div>
	</div>
	
	

 </body>
 </html>
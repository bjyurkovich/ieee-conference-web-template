# IEEE Conference Website Template
An easily editable IEEE Conference Website template

##Introduction and Motivation
While there is a distinct visual "appeal" for the historical look and feel of the typical IEEE conference website design, we believe it may be time for a slightly more updated approach to the conference websites.  This repository aims to provide the busy conference chair a beautiful template that he/she can pass along in the delegation (cohersion?) of the frustrating task of updating an old IEEE website template to someone else.  Our goal is to make it really easy to modify and replace the content to make it relevant to the conference/event at hand.

There are a number of well developed CMS (content management system) technologies out there: Drupal, Wordpress, etc.  Each of these CMS platforms pose their own set of flavors and features and provide great power and flexibility to the user.  It is almost always highly recommended to not reinvent the wheel when trying to remake a CMS and provide non-power users an easy to use web interface to manage and upload web content.  Like any good software team, however, we completely decided against this age-old wisdom and did not use one of these systems but instead started from scratch and built a very minimal, half-baked version of a CMS (if you can even call it that).  We chose this path for a couple reasons:

1. Powerful CMS systems can sometimes be difficult for a novice to setup and deploy
2. Powerful CMS systems often require specific server settings which cannot be gauranteed to be present on all hosting environments
3. It was requested that if we do remake a site, that it be easily editable for the future generations of conference chairs and that we shouldn't deviate to much from the "common template experience"
4. We were kindly volunteered to do this task, and given all the other paid work we needed to do, we really didn't want to take on a full template implementation! (but were still too tired of looking at the old site designs keep perpetuating the existing template design)

We chose to use PHP (the same language that Pradeep Misra put the current operating template with years ago - and he did a good job back then!).  While it is by far our first choice of languages to use given all the great new technologies that we work with every day, we didn't want to try to introduce something new.  Plus, PHP has a huge user base and can be deployed just about anywhere the bits and bytes roam.  With that said, we also attempted to bring a smattering of the 21st century to this template by making a simple configuration file "coded" in JSON (javascript object notation).  JSON is a really lightweight, human-readable format that is used in most modern webservices (and some databases!).  By using JSON, we hope to provide you a one-stop-file to put most (if not all) your website configuration data into without having to dig around in the web code to make simple content changes.

Below is a step-by-step guide in making this template your own!

##Step 1. How to Get the Template
There are a couple of ways to get the files in this template start modifying:

1. Use `git` and "clone" the repository.  If you do it this way, we assume you have some experience in cloning git repositories: `git clone https://github.com/bjyurkovich/ieee-conference-web-template.git`
2. Press the "Download Zip" Icon in the top corner of this page above the file listings.

##Step 2. Modify the Configuration File
We have included a JSON configuration file that holds most of the general information, links, and resource (images, etc) locations.  This can be found in `configuration/config.json` file.  See [an overview](http://www.json.org/) in case you want to know more about JSON.

###Set Meta Data
The first thing you want to do is modify the conference meta information. This information is used in a number of places in the site:
```json
...
"meta":{
	"conferenceYear": 2017,
	"dateStart": "2017-08-27",
	"dateEnd": "2017-08-30",
	"conferenceName": "CCTA 2017"
},
...
``` 
###Set Header information
The header information needs to be set.  This information is used on the primary page header on all the pages:
```json
...
"header":{
	"title" : "CCTA 2017",
	"subtitle" : "1st IEEE Conference on Control Technology and Applications",
	"dateTitle" : "August 27-30, 2017",
	"locationPlaceName": "The Mauna Lani Bay Hotel and Bungalows",
	"locationAreaName": "Kohala Coast, Hawai'i",
	"bannerImage":"images/hotel1-banner.jpg",
	"bannerTopPlacement" : "-310px",
	"bannerRightPlacement" : "-550px"
},
...
```
###Set Social Media Links
The next thing to do is set the social media links. Since it is trivial to make a facebook, twitter, and linkedin page for your conference, and they add some cool things (especially twitter) to your event:
```json
...
"socialMediaLinks":{
	"facebook":"http://facebook.com/[your-site-link]",
	"twitter":"http://twitter.com/[your-conference-handle]",
	"linkedin":"http://linkedin.com/[your-linkedin-conference-page]"
},
...

### Identify the dates
Next, you should identify the dates and corresponding titles.  These are used in the right nav menu and dates page:
```json
...
"dates":[
	{
		"title":"Paper Submission Opens",
		"date": "December 15, 2016"
	},
	{
		"title":"Invited Session Proposals Due",
		"date": "March 1, 2017"
	},
	{
		"title":"Contributed and Invited Papers Due",
		"date": "March 1, 2017"
	},
	{
		"title":"Notification of Acceptance",
		"date": "June 1, 2017"
	},
	{
		"title":"Final Submissions Due",
		"date": "July 1, 2017"
	}
],
...
```

###Set the footer items and links
You will also want to set your own footer items and links:
```json
...
"footerLinks":{
	"firstSection":{
		"title":"conference",
		"links":[
			{
				"name": "Program",
				"link": "resources/ccta2017-program.pdf"
			},
			{
				"name": "Map",
				"link": "http://maps.google.com"
			},
			{
				"name": "Speakers",
				"link": "resources/ccta2017-program.pdf"
			},
			{
				"name": "Events",
				"link": "resources/ccta2017-program.pdf"
			},
			{
				"name": "Sessions",
				"link": "resources/ccta2017-program.pdf"
			}
		]
	},
	"secondSection":{
		"title":"destination",
		"links":[
			{
				"name": "Hotel",
				"link": "hotel.php"
			},
			{
				"name": "Recommended Sights",
				"link": "http://google.com"
			},
			{
				"name": "Conference Deals",
				"link": "#"
			},
			{
				"name": "The Big Island",
				"link": "#"
			},
			{
				"name": "Flights",
				"link": "http://flights.google.com"
			}
		]
	},
	"thirdSection":{
		"title":"author links",
		"links":[
			{
				"name": "Papercept Plaza",
				"link": "hotel.php"
			},
			{
				"name": "author information",
				"link": "authors.php"
			},
			{
				"name": "IEEE Guidelines",
				"link": "#"
			},
			{
				"name": "Templates",
				"link": "#"
			},
			{
				"name": "IEEE Xplore",
				"link": "#"
			}
		]
	},
	"fourthSection":{
		"title":"sitemap",
		"links":[
			{
				"name": "Home",
				"link": "welcome.php"
			},
			{
				"name": "Organizers",
				"link": "organizers.php"
			},
			{
				"name": "Visa Information",
				"link": "visainformation.php"
			},
			{
				"name": "Events",
				"link": "events.php"
			},
			{
				"name": "Registration",
				"link": "registration.php"
			}
		]
	}
}
...
```

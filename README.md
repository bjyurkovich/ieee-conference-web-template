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

We recommend using a simple, portable editor such as [Sublime Text](http://www.sublimetext.com/3) to edit the files we mention in this tutorial.

Before we begin with modifying our content, you should understand the organization of the template files:
```
|--configuration
   |--config.json  (this is your main configuration file)
|--css
   |--main-styles.css (this holds most of the template styles)
|--images  (this is where you should put images you use)
   |--hotel
      |--hotel1.jpg
      |--hotel2.jpg
      etc...
   |--hotel1-banner.jpg
   |--ieee-logo.png
|--resources (put pdfs and other things that you want to link to like conference program)
   |--program.pdf
   |--other-pdf-file.pdf
|--index.php (this is where you will put your content files)
|--registration.php
|--another-content-file.php
|--header-left-bar.php
|--right-bar-footer.php
```

By keeping this file stucture, the template should work with the configuration file.

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
A few things to note:  

1. `bannerImage` is the filename (and folder location) of the banner image in the header and should be roughly the same size or larger as the included one (2076 × 942) if possible.  The larger the resolution the better. If it is smaller than 1920x1080, you run the risk of not filling the entire banner on some HD monitors.
2. `bannerTopPlacement` and `bannerRightPlacement` allow you to move around the banner image in order to focus it in on a good spot of the image.  Just play around with the numbers until you get it to a point that it looks good.

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
	...
```
You will notice that the links are fully qualified (links starting with "http://") for outside links, and just the folder/filename if they are files (php, html, pdf, jpg, png, etc) you make.  There are four (and only four) footer sections.

For a complete example of how the configuration file comes together, see `configuration/config.json`.


##Step 3. Creating or Editing Content Files
To create or modify content files (such as the main welcome page: `index.php`), open the file or create a new file with the other content files ending with a `.php` extenstion.  This file has 3 primary components:

###Header Information
```php
<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
```
The header information sets the page title (in this example, "welcome").  The page title is what is displayed on the main title bar of each content page.  The `header-left-bar.php` file contains the PHP/HTML code to generate the header and left navigation bar. 

> The `$pageTitle` variable must be set before the `require 'header-left-bar.php';` line is specified.  

###Your Page Content
You can use your own HTML, text, pictures, or whatever you want at this stage to replace the existing content.  You may notice that we included a few CSS classes to use in case you want them (like rounded pictures, text formatting, etc).  You can look through some of the example pages in the templates to see the options.

> In the event that you want to include your own CSS stylesheet to be loaded for the page you are editing, you can do so by adding a line above `require 'header-left-bar.php';` that sets the variable `$stylesheet` css stylesheet file and location.  For example: `$stylesheet='css/my-own-custom-stylesheet.css';`

###The rest of the page
Make sure to include the rest of the page template.  The `right-bar-footer.php` file contains the right navigation bar that holds the dates and the footer code:
```php
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
```
This should be the last line in every one of your content files.



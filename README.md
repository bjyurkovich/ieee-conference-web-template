# IEEE Conference Website Template
An easily editable IEEE Conference Website template

##Introduction
While there is a distinct visual "appeal" for the historical look and feel of the typical IEEE conference website design, we believe it may be time for a slightly more updated approach to the conference websites.  This repository aims to provide the busy conference chair a beautiful template that he/she can use in the delegation (cohersion?) of the frustrating task of updating an old IEEE website template to someone else.

The goal is to make it really easy to modify and replace the content to make it relevant to the conference/event at hand.

There are a number of well developed CMS (content management system) technologies out there: Drupal, Wordpress, etc.  Each of these CMS platforms pose their own set of flavors and features and provide great power and flexibility to the user.  It is almost always highly recommended to not reinvent the wheel when trying to remake a CMS and provide non-power users an easy to use web interface to manage and upload web content.  Like any good software team, however, we completely decided against this age-old wisdom and did not use one of these systems but instead started from scratch and built a very minimal, half-baked version of a CMS (if you can even call it that).  We chose this path for a couple reasons:

1. Powerful CMS systems can sometimes be difficult for a novice to setup and deploy
2. Powerful CMS systems often require specific server settings which cannot be gauranteed to be present on all hosting environments
3. It was requested that if we do remake a site, that it be easily editable for the future generations of conference chairs and that we shouldn't deviate to much from the "common template experience"
4. We were kindly volunteered to do this task, and were really tired of looking at the old site designs and couldn't bear to perpetuate the existing template design

We chose to use PHP (the same language that Perdip Misra put the current operating template with years ago).  While it is by far our first choice of languages to use given all the great new technologies, we didn't want to try to introduce something new.  Plus, PHP has a huge user base and can be deployed just about anywhere the bits and bytes roam.  With that said, we attempted to bring an smattering of the 21st century to this templating process by making a simple configuration file "coded" in JSON (javascript object notation).  JSON is a really lightweight, human-readable format that is used in most modern webservices (and some databases!).  By using JSON, we hope to provide you a one-stop-file to put most (if not all) your website configuration data into without having to dig around in the web code to make simple changes.


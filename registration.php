<?php 
$pageTitle='Conference Registration'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/registration.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<style type="text/css">

.datagrid table { overflow-x:visible; border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #8C8C8C; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; overflow-x: scroll; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8C8C8C), color-stop(1, #7D7D7D) );background:-moz-linear-gradient( center top, #8C8C8C 5%, #7D7D7D 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8C8C8C', endColorstr='#7D7D7D');background-color:#8C8C8C; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #A3A3A3; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #7D7D7D; border-left: 1px solid #DBDBDB;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #EBEBEB; color: #7D7D7D; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #8C8C8C;background: #EBEBEB;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #F5F5F5;border: 1px solid #8C8C8C;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8C8C8C), color-stop(1, #7D7D7D) );background:-moz-linear-gradient( center top, #8C8C8C 5%, #7D7D7D 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8C8C8C', endColorstr='#7D7D7D');background-color:#8C8C8C; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #7D7D7D; color: #F5F5F5; background: none; background-color:#8C8C8C;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; } .datagrid {margin:10px 0 10px 0;} 

.bd ul{
	list-style-type: disc;
	list-style-position: inside;
	margin-left:3%;
	margin-top: 1%;
	margin-bottom: 1%;
}

.bd ul li{
	padding: 5px 0 5px 0;
}

</style>

<div class="text">
	<!-- <div style="font-weight: bold">
		Registration is now OPEN! <a style="color:red" href="http://css.paperplaza.net" target="_blank">Please click here</a>. Note that all attendees must register for the conference, whether author, presenter, or interested participant. Be sure to check out the pre-conference Workshops below.
	</div>
	<div style="width: 100%;border-bottom: 2px solid black; margin-bottom: 20px;margin-top: 20px;"></div>
	<div style="margin: 10px 0 30px 0;">
		Registration is mandatory for all conference and workshop participants. Personal name badge will be provided to identify registered participants, and these badges should be worn at all conference functions.
	</div>
	
	<h2>Registration Desk</h2>
	<p style="padding-bottom: 20px">
		The conference registration desk will be located outside the conference session rooms (near the Ballroom and Meeting Rooms, next to the Honu Garden). At this desk you will be able to check in, pick up your registration materials and banquet tickets, and consult with conference staff for tips on local dining and conference information.  The schedule for the registration desk is as follows:

		<div class="datagrid" style="width: 50%; margin:0 auto;margin-bottom: 30px">
		<table style="margin:0 auto;margin-top: 0">
			<thead><tr><th>Date</th><th>Desk Hours</th></tr></thead>
			<tbody>
				<tr><td>Sunday, August 27</td><td>9:00 a.m. - 6:00 p.m.</td></tr>
				<tr class="alt"><td>Monday, August 28</td><td>7:30 a.m. - 6:00 p.m.</td></tr>
				<tr><td>Tuesday, August 29</td><td>7:30 a.m. - 6:00 p.m.</td></tr>
				<tr class="alt"><td>Wednesday, August 30</td><td>7:30 a.m. - 3:00 p.m.</td></tr>
			</tbody>
		</table>
		</div>
	</p>

	<h2>Conference Registration Rates and Fees</h2>
	<p>
		Attendees must register under one of the registration categories listed below.  All registered participants will receive admission to the Welcome and Farewell receptions and one set of the conference proceedings on a USB flash drive. Full registration for Members and Non-Members also includes the conference banquet on Tuesday, August 29.  Registration packets (including printed receipts) for all advance registrations will be available at the conference registration desk.
		<div class="datagrid" style="margin: 20px 0 20px 0;">
		<table style="margin:0 auto;">
			<thead>
				<tr><th>Registration Category</th><th>Advance Registration (by July 1, 2017)</th><th>On-Site Registration (after July 1, 2017)</th><th>Banquet</th></tr></thead>
			<tbody>
				<tr><td>Member</td><td>630 USD</td><td>720 USD</td><td>included</td></tr>
				<tr class="alt"><td>Non-Member</td><td>760 USD</td><td>850 USD</td><td>included</td></tr>
				<tr><td>IEEE Life Member/Retiree</td><td>375 USD</td><td>450 USD</td><td>not included</td></tr>
				<tr class="alt"><td>Student</td><td>310 USD</td><td>375 USD</td><td>not included</td></tr>
			</tbody>
		</table>
		</div>

		<div>
			<span style="font-weight: bold">Member:</span> If you are a member of IEEE or SICE, you may register at "Member" rate. This registration category is entitled to upload up to three final papers. Additional papers can be uploaded for 200 USD each. 
		</div>
		<br>
		<div>
			<span style="font-weight: bold">Non-Member:</span> If you are not a member of IEEE or SICE you should register at the Non-Member rate. This registration category is entitled to upload up to three final papers. Additional papers can be uploaded for 200 USD each.
		</div>
		<br>
		<div>
			<span style="font-weight: bold">IEEE Life Members:</span> If your IEEE membership status is that of Life Member, Life Senior Member or Life Fellow, you may register at Life Member rate (send an email with your PIN and IEEE number to the registration chair, Professor Simona Onori <a href="mailto:sonori@clemson.edu" style="color:red">[link to email]</a>, prior to registering). This registration category is entitled to upload up to three final papers. Additional papers can be uploaded for 200 USD each.
		</div>
		<br>
		<div>
			<span style="font-weight: bold">Retiree:</span> If at the time of registration or at the time of initial submission of paper for review you are a member of any of the above organization(s), and had retired or did not hold a full time employment, you may register at Retiree rate. This registration category is entitled to upload ONLY ONE final paper. Additional papers can be uploaded for 200 USD each.
		</div>
		<br>
		<div>
			<span style="font-weight: bold">Student:</span> If at the time of registration or at the time of initial submission of paper for review you were a "full-time student" at a recognized institution, you may register at student rate. You may be required to provide evidence of full-time student status. This registration category is entitled to upload ONLY ONE final paper. Additional papers can be uploaded for 200 USD each.
		</div>
		
	</p>

	<h2>Additional Fees</h2>
	<p class="bd">
		<ul>
			<li>Cost per paper for extra paper upload: 200 USD</li>
			<li>Excess Page Charges: 175 USD/page (maximum of two beyond six-page limit)</li>
			<li>Additional Proceedings (USB): 20 USD/each</li>
			<li>Additional Evening Banquet Tickets: 125 USD/each</li>
		</ul>
	</p>

	<h2>Cancellation Policy</h2>
	<p class="bd">
		If an author has uploaded a paper using his or her registration, the registration will not be refunded even if the paper is withdrawn or the author is unable to attend the conference. Other requests for a refund of the advanced registration fee will be processed as follows:
		<ul>
			<li>All requests must be sent to the registration chair, Professor Simona Onori <a href="mailto:sonori@clemson.edu" style="color:red">[link to email]</a></li>
			<li>Requests received by the advance registration deadline of July 1, 2017, will be fully honored and all registration charges will be refunded.</li>
			<li>Requests received between July 1, 2017 and July 31, 2017 will receive a 50% refund.</li>
			<li>No refunds will be given for requests received after July 31, 2017.</li>
		</ul>
	</p>

	<h1>Workshop Registration</h1>
	<div>Three preconference workshops will be offered at CCTA 2017 on Sunday, August 27. See the <a href="workshops.php" style="color: red">workshops page</a> for more information. Workshop attendance requires a separate registration payment, as noted below. All prices are in U.S. dollars. 

	<div class="datagrid">
	<table style="margin:0 auto">
		<thead>
			<tr>
				<th colspan="1"></th>
				<th colspan="2">By July 1, 2017</th>
				<th colspan="2">After July 1, 2017</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td></td>
				<td>Member or Non-member</td>
				<td>Student/Retiree/Life Member</td>
				<td>Member or Non-member</td>
				<td>Student/Retiree/Life Member</td>
			</tr>
			<tr class="alt">
				<td>Half-Day Workshop</td>
				<td>120 USD</td>
				<td>60 USD</td>
				<td>150 USD</td>
				<td>75 USD</td>
			</tr>
		
			<tr>
				<td>Full-Day Workshop</td>
				<td>200 USD</td>
				<td>100 USD</td>
				<td>250 USD</td>
				<td>125 USD</td>
			</tr>
		</tbody>
	</table>
	</div>
</div> -->
Stay tuned
</div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
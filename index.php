<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>2014 FGL Leadership Conference Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="main.css">
        
        <!--[if IE 8]>
        <link rel="stylesheet" href="ie8.css">
		<![endif]-->
    </head>



    <body>


		<div id="container">
			<div style="position:relative; top: 180px;">
	
			</div>

			<img src="/images/mountains2.png" style="" />
				
			<div id="form-div">
			<div id="subheading">
				<h4>Leadership Conference 2015</h4>
				<h5>October 27 - 29, 2015 &nbsp;&nbsp;&nbsp;&mdash;&nbsp;&nbsp;&nbsp;&nbsp; Banff Springs Hotel &nbsp;&nbsp;&nbsp;&mdash;&nbsp;&nbsp;&nbsp;&nbsp; Banff, AB</h5>
			</div>
				<form id="regform">
					<!-- <h2>Conference Registration</h2> -->
					<h1>Personal Information</h1>
					<table id="personal-table">
						<tr>
							<td><label id="label-first">First</label></td>
							<td colspan="2"><input type="text" class="med" id="firstname"></input></td>
							<td><label id="label-last">Last</label></td>
							<td colspan="2"><input type="text" class="med" id="lastname"></input></td>																					
						</tr>
						
						<tr>
							<td><label id="label-phone">Phone</label></td>
							<td colspan="2"><input type="text" class="med" id="phone"></input></td>
							<td><label id="label-office">Office</label></td>
							<td colspan="2">	
								<select name="office" id="office" class="form-control med">
									<option value=""></option>    
									<option value="Calgary">Calgary</option>    
									<option value="Toronto">Toronto/Mississauga</option> 
									<option value="Laval">Laval</option>    
								</select>
							</td>																					
							
						</tr>
						
						<tr>
							<td><label id="label-email">Email</label></td>
							<td colspan="5"><input type="text" class="long" id="email"></input></td>
						</tr>
						
						<tr>
							<td><label id="label-diet">Dietary<br />Needs</label></td>
							<td colspan="5"><input type="text" class="long" id="diet"></input></td>
						</tr>
						
<!-- 						<tr>
							<td><label>Roommate</label></td>
							<td colspan="5">
								<input type="text" class="long" id="roommate"></input>
								<small>Please note: All AVPs will be sharing rooms, no exceptions</small>
							</td>

						</tr> -->	
						<tr>
							<td colspan="3"><label id="label-bus">Will you be taking the bus from Calgary?</label></td>
							<td colspan="2">
								
								<select name="bus" id="bus" class="bus-select">
								                        <option value=""></option>
								                        <option value="yes">Yes</option>
								                        <option value="no">No</option>
								                    </select>
								                    <br />
								
							</td>
							
						</tr>
						<tr> 
						<td colspan="8">
							<center><small>* Please note parking at the hotel is $18 this expense will not be covered through the conference</small></center>
						</td>
						</tr>
					</table>
					<br />
					
					<h1 id="activity-header">Activity Selection &nbsp;&nbsp;&mdash;&nbsp;&nbsp; You may pick one from each day if you choose</h1>
					<p><strong>* OPTIONAL NOT MANDATORY *</strong></p>
					<table>
						<tr>
							<td valign="top" width="55%">
								<h3>Day 1</h3>
								<p><input type="radio" name="day1" value="yoga"> Yoga <small>(1 Hour)</small></p>
								<ul>
									<li>Class led by Leah-Anne Bignell</li>
								</ul>

								<p><input type="radio" name="day1" value="trail run"> Trail Run <small>(1 hour)</small></p>
								<ul>
									<li>8 – 10KM trail run led one of Calgary’s<br />own ultra-runners Mike Maloney</li>
									<li>5KM run led by one of FGL’s finest</li>
								</ul>

								<a class="clear-selection" href="#" onclick="$('input[name=day1]').attr('checked',false);">Clear Day 1 Selection</a>
							</td>
							
							<td valign="top">
								<h3>Day 2</h3>
								<p><input type="radio" name="day2" value="hike"> Hike <small>(1 Hour)</small></p>
								<ul>
									<li>5KM beginners hike led by Matt Fay</li>
								</ul>

								<p><input type="radio" name="day2" value="crossfit"> Crossfit Class <small>(1 hour)</small></p>
								<ul>
									<li>Geared towards ski &amp; snowboarding<br />led by Jay Raymundo</li>
									
								</ul>
								<br />
								<a class="clear-selection" href="#" onclick="$('input[name=day2]').attr('checked',false);">Clear Day 2 Selection</a>
							</td>
							
						</tr>
						
					</table>
					<br />
					<div id="sendemail"></div>
					<button type="submit" id="submit" class="btn">Send Registration</button>
				</form>
			</div>
		
		</div>

		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="js/contact.js"></script>

    </body>

</html>
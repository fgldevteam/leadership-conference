<?php


$mailFrom = 'no-reply@thecompleteexperience.ca';
$subject = "[Leadership Conference] - " . $_POST['fname'] . " " . $_POST['lname'];

$message .= "Name: " . $_POST['fname'] . " " . $_POST['lname']. "\n";
$message .= "Email " . $_POST['email'] . "\n";
$message .= "Phone: " . $_POST['phone'] . "\n";
$message .= "Office: " . $_POST['office'] . "\n";
$message .= "\n";
$message .= "Diet Needs: " . $_POST['diet'] . "\n";
$message .= "Roommate Requested: " . $_POST['roommate'] . "\n";
$message .= "\n";
$message .= "Bus: " . $_POST['bus'] . "\n";
$message .= "\n";
$message .= "Activity: " . $_POST['activity_1'] . " " . $_POST['activity_2'] . "\n";
$message .= "\n";
$message .= "Shirt Size: " . $_POST['shirt'] . "\n";
$message .= "Jacket Size: " . $_POST['jacket'] . "\n";
$message .= "Shoe Size: " . $_POST['shoes'] . "\n";


//$usermailTo = $_POST['email'];
$usermailFrom = 'Leadership Conference Registration <no-reply@thecompleteexperience.ca>';
$usersubject = "Thank you for your registration!";

$usermessage .= "Thank for your registration. This is the information we received from you: \n\n";
$usermessage .= "Name: " . $_POST['fname'] . " " . $_POST['lname']. "\n";
$usermessage .= "Email " . $_POST['email'] . "\n";
$usermessage .= "Phone: " . $_POST['phone'] . "\n";
$usermessage .= "Office: " . $_POST['office'] . "\n";
$usermessage .= "\n";
$usermessage .= "Diet Needs: " . $_POST['diet'] . "\n";
$usermessage .= "Roommate Requested: " . $_POST['roommate'] . "\n";
$usermessage .= "\n";
$usermessage .= "Bus: " . $_POST['bus'] . "\n";
$usermessage .= "\n";
$usermessage .= "Activity: " . $_POST['activity_1'] . " " . $_POST['activity_2'] . "\n";
$usermessage .= "\n";
$usermessage .= "Shirt Size: " . $_POST['shirt'] . "\n";
$usermessage .= "Jacket Size: " . $_POST['jacket'] . "\n";
$usermessage .= "Shoe Size: " . $_POST['shoes'] . "\n";

//connect to DB
$host = "internal-db.s51258.gridserver.com";
$user = "db51258";
$pass = "3nc50Xj8y5";
$db = "db51258_leadership";

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
mysql_select_db($db) or die ("Unable to select database!"); 

//insert registration
$q = "INSERT INTO registrations2014 (first, last, email, phone, office, diet, roommate, bus, activity, activity_1, activity_2, shirt, jacket, shoes) VALUES(
	 '".$_POST['fname']."', 
	'".$_POST['lname']."', 
	'".$_POST['email']."', 
	'".$_POST['phone']."', 
	'".$_POST['office']."',
	'".$_POST['diet']."',
	'".$_POST['roommate']."',
	'".$_POST['bus']."',
	'".$_POST['activity']."',
	'".$_POST['activity_1']."',
	'".$_POST['activity_2']."',		
	'".$_POST['shirt']."',
	'".$_POST['jacket']."',														 
	 '".$_POST['shoes']."'
	 )";
	
mysql_query($q) or die ("Error in query: $q. ".mysql_error());

//send email

// admin emails

mail("Samantha.Ng@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("Leah.Carter@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("Shelagh.Ell@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("brent.garner@fglsports.com", $subject, $message, "From: ".$mailFrom);


//user email
mail($_POST['email'], $usersubject, $usermessage, "From: ".$usermailFrom);

 
?>
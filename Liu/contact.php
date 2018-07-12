

<?php include("header.php"); ?>	

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initia-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>LiunarLink</title>
	<link id="pagestyle" rel="stylesheet" type="text/css" href="style/style.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="style/form.css"/>
	<link rel="icon" type="image/x-icon" href="img/liu_fav.ico">
	<meta property="og:site_name" content="LiunarLink" />
	<meta property="og:title" content="LiunarLink">
	<meta property="og:type" content="website">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="javascript/script.js"></script>
	<script src="javascript/script2.js"></script>
	<script src="javascript/style.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="javascript/thanks_text.js"></script>
	
	</script>
</head>
	
	<body>

		<h2>Contact</h2>

<form method="POST" action="" onsubmit="return changeText()">

		<label>
			Your Name <font color="red">*</font>
		</label>
				<input type="text" name="name" id ="name" placeholder="Lupe Blaser" required autofocus>
	
		<label>
			Subject <font color="red">*</font>
		</label>
				<input type="text" name="title" id="title" placeholder="The subject for the application" required>
	
	
		<label>
			Company <font color="red">*</font>
		</label>
				<input type="text" name="company" id="company" placeholder="LiunarLink" required>
					
		<label>
			Your email <font color="red">*</font>
		</label>
			<input type="email" name="mail" id="mail" placeholder="youremail@gmail.com" required>
	
		<label>
			Details <font color="red">*</font>
		</label>
	<textarea name="message" id="message" placeholder="Any information that you wish to provide us" required></textarea>

	<input type="submit" value="SEND" id="sendBtn" name="submit">
	
	<p id="thanks"></p>
	
	</form><br>
	<?php
	if(isset($_POST['submit'])){
    $to = "andrei.gavrila94@gmail.com"; // this is your Email address
    $from = $_POST['mail']; // this is the sender's Email address
	$name = $_POST['name'];
    $company = $_POST['company'];
    $subject = $_POST['title'];
    $subject2 = "Liunarlink - Thank you for contacting us";
    $message =  $name . " " . " wrote the following: " . "\n\n" . "Company: ". $_POST['company'] . "\n"
				."My contact e-mail: " . $_POST['mail'] . "\n" . "Details: " . $_POST['message'];
    $message2 = "Here is a copy of your submission: " . "\n\n" . "Company: ". $_POST['company'] . "\n"
				."My contact e-mail address: " . $_POST['mail'] . "\n" . "Details: " . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
	sleep(1);
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	}
?>

	
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include("footer.php")?>
	</body>
</html>

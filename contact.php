<?php include 'header.php'; ?>
		<!-- End Header -->
    <?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('from@example.com', 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('cornellekacy4@gmail.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Transpo Logistics';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Subject: {$_POST['subject']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            echo "<script>alert('Message Successfully Sent we will get back to you shortly');
            window.location.href = 'contact.php'</script>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>
		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section contact">
			<div class="container">
				<div class="page-banner-box">
					<h1>Contact us.</h1>
					<a href="#">Request a Free Quote</a>
				</div>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- contacting-section 
			================================================== -->
		<section class="contact-section">

			<div class="container">

				<div class="title-section">
					<h1>Get In Touch</h1>
					<p>If you have any questions about what we offer for consumers or for business, you can always email  us via the below details. We’ll reply within 24 hours.</p>
				</div>

				<div class="contact-box">
					<div class="row">
						<div class="col-md-6">
							<form id="contact-form" method="post">
								<h2>We’re Ready to Help!</h2>
								<p>we are always happy to help, just fill the form bellow and we will get back to you in less than no time</p>
								<div class="row">
									<div class="col-sm-6">
										<input name="name" id="first-name" type="text" placeholder="Name*">
									</div>
									<div class="col-sm-6">
										<input name="email" id="last-name" type="text" placeholder="Email*">
									</div>
								</div>
								<input name="subject" id="mail" type="text" placeholder="Subject*">		
								<textarea name="comment" id="comment" placeholder="Message*"></textarea>
								<p>
									<span class="call">call us: 1234-567-484</span> or 
									<input type="submit" id="submit_contact" value="Book Consultation">
								</p>
								
								<div id="msg" class="message alert">
								
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<h2>Our Location</h2>
							<div id="map"></div>
						</div>
					</div>
				</div>

			</div>

		</section>
		<?php include 'footer.php'; ?>
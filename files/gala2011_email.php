<?php
require_once 'PATH/swift_required.php'; //Swift Mail Library

function gala2011_email($result) {
	if(isset($result) && $result->success) {
		date_default_timezone_set('America/New_York');

		$salutation = $result->transaction->customFields['salutation'];
		$address1 = $result->transaction->customFields['address1'];
		$address2 = $result->transaction->customFields['address2'];
		$city = $result->transaction->customFields['city'];
		$state = $result->transaction->customFields['state'];
		$zipcode = $result->transaction->customFields['zipcode'];
		$middlename = $result->transaction->customFields['middlename'];

		$cardtype = $result->transaction->creditCardDetails->cardType;
		$cardnumber = $result->transaction->creditCardDetails->maskedNumber;
		$expdate = $result->transaction->creditCardDetails->expirationDate;

		$firstname = $result->transaction->customerDetails->firstName;
	    $lastname = $result->transaction->customerDetails->lastName;
		$amount = $result->transaction->amount;
		$orderid = $result->transaction->id;
		$email = $result->transaction->customerDetails->email;

		$thedate = date('m/d/Y');

		$name = $salutation." ".$firstname." ".$middlename." ".$lastname;
		$amount = '$'.$amount;

		if (empty($address2)) {
			$address = $address1;
			}
		else {
			$address = $address1.", ".$address2;
		}

	//Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.lsc.org', 25);

	//Create the Mailer using your created Transport
	$mailer = Swift_Mailer::newInstance($transport);

	//Create a message
	$message = Swift_Message::newInstance('Liberty Science Center, Gala 2011 - Thank You');
	$message->setFrom(array('kthompson@lsc.org' => 'Liberty Science Center, Gala 2011'));
	$message->setTo(array($email));

	$logo = $message->embed(Swift_Image::fromPath('http://www.lsc.org/assets/images/lsc-logo.png'));

	$message->setBody('<img src="'.$logo.'" alt="logo" border="0"/></p><h4>Dear '.$firstname.',</h4><h4>Thank you for your donation of '.$amount.' in support of Liberty Science Center’s Citizen Science Gala.</h4><p>The Gala is the Center’s largest annual fundraiser, attracting support from a wide variety of sponsors, from the generous leadership of the Board of Trustees to established partners and honoree-specific individuals and organizations.  Representatives from the region’s corporate, community and government sectors attend this event, and we welcome between 450 to 600 guests each year.</p><p>Liberty Science Center has a mission to engage the diverse NJ/NYC region in the science and technology critical to societal innovations and environmental stewardship.  A major resource to both school education and lifelong learning, this landmark institution inspires interest, insight and action towards a sustainable future.  Its annual onsite audience includes more than a quarter of a million students.  All Gala proceeds will benefit Liberty Science Center’s exhibitions and programs, which offer exceptional experiences for learners of all ages – onsite, offsite and online.</p><p>Should you have questions about Liberty Science Center or the Gala, please feel free to contact us at 201.253.1447 or <a href="mailto:kthompson@lsc.org">kthompson@lsc.org</a>.</p><p>We’re so grateful for your support of the 2011 Gala. Thank you again.</p><p>Best regards,</p></p><p>Emlyn Koster, PhD</p><p>President and CEO</p><hr /><p><b>Transaction Summary:</b></p><p>Date: '.$thedate.'</p><p>Name: '.$name.'</p><p>OrderConfirmation#: '.$orderid.'</p><p>Address: '.$address.'</p><p>City: '.$city.'</p><p>State: '.$state.'</p><p>ZIP: '.$zipcode.'</p><p>Amount: '.$amount.'</p><p>Card Type: '.$cardtype.'</p><p>Credit Card Charged: '.$cardnumber.'</p><p>Expiration Date: '.$expdate.'</p><hr /><p>Liberty Science Center is a 501(c)(3) nonprofit organization.  Your contribution is tax deductible to the extent allowed by law.</p><p>An acknowledgement of your gift over $75 that can be used for tax purposes will be mailed to you after the event, except for raffle ticket purchases, which are not tax deductible.</p>');



//allow html
$message->setContentType("text/html");

//Send the message
$sendit = $mailer->send($message);

	}
}
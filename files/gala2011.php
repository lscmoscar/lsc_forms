<?php
require_once 'PATH/_environment.php'; //Loading BrainTree Files,API KEYs (public and private), merchant id

include 'gala2011_db.php'; //mysqldb code 
include 'gala2011_email.php'; //send email confirmation
     
?>
<style type="text/css">
	.ticketinfo {max-height:800px;padding-bottom:30px;}
	#adspecs {font-size:12px;text-align:center;}	
</style>

<div id="container">
	<?php
    if (isset($_GET["id"])) {
        $result = Braintree_TransparentRedirect::confirm($_SERVER['QUERY_STRING']);
    }
    if (isset($result) && $result->success) { ?>
        <?php $transaction = $result->transaction; ?>
		<?php update_lsc_db($result); ?> <!--FUNCTION FROM GALA2011_DB.PHP00-->
		
		<div id="confirm_message">
		
         <h3>Thank you for your donation to Liberty Science Center in support of the Citizen Science Gala!</h3>  

		 <p>The following online gift has been processed. Your credit card will be charged <b style="text-decoration:underline;">$<?php echo htmlentities($transaction->amount); ?></b>. Please print this page as a confirmation of your online order.</p>
		<p>Liberty Science Center is a 501(c)(3) nonprofit organization.  Your contribution is tax deductible to the extent allowed by law.</p>
		<p>An acknowledgement of your gift over $75 that can be used for tax purposes will be mailed to you after the event, except for raffle ticket purchases, which are not tax deductible.</p>
		
        <div id="confirm_details">
			<hr />
			<p>Name: <b><?php echo $transaction->customFields['salutation'];?> <?php echo htmlentities($transaction->customerDetails->firstName)?> <?php echo htmlentities($transaction->customerDetails->lastName); ?></b></p>
			<p>Order Confirmation#: <b><?php echo htmlentities($transaction->id);?></b></p>
			<p>Credit Card Charged: <b><?php echo htmlentities($transaction->creditCardDetails->maskedNumber);?></b></p>
			<p>Transaction Created At <b><?php $transaction->createdAt->setTimezone(new DateTimeZone('America/New_York'));echo htmlentities($transaction->createdAt->format('m/d/Y, h:i:s a'));?></b></p>
			<p>If you have any questions about Liberty Science Center or the Gala, please contact Kathleen Thompson at 201.253.1447 or <a href="mailto:kthompson@lsc.org">kthompson@lsc.org</a></p>
			<hr />
			</div>
			
			<p style="text-align:center;">Go to <a href="http://www.lsc.org" alt="LSC.org">LSC.org</a></p>
		</div>
		<?php gala2011_email($result); ?>
    <?php
    } else {
        if (!isset($result)) { $result = null; } ?>
        <?php if (isset($result)) { ?>
	
			<script type="text/javascript">
			$(window).load(function () {				
				var check_val = $('#h_contactme').val();
				if (check_val == 'Yes') {
					$('#contactme').parent().attr('class','checked');
					$('#contactme').val('Yes');
				}
				else {
					$('#contactme').parent().attr('class','');
					$('#contactme').val('No');
				}
						
			});
			</script>
			
            <div id="ccerrors"><?php echo $result->errors->deepSize();?> error(s)<br />
			<?php 
				 foreach($result->errors->deepAll() AS $error) {
				  print_r($error->message . "<br />");
				}
				if($result->transaction->status) {
					echo($result->transaction->status);echo ': ';
					echo($result->transaction->processorResponseText);
					echo($result->transaction->gatewayRejectionReason);
				}
				
				
			?>
		</div>
        <?php } ?>

		<div class="beginning" style="text-align:center;">
		<h1 style="padding-bottom:0px;margin-bottom:0px;">Citizen Science Gala</h1>
		<script language="javascript">
		function kH(e) {var pK = e ? e.which : window.event.keyCode;return pK != 13;}document.onkeypress = kH;if (document.layers) document.captureEvents(Event.KEYPRESS);</script>
        
		<h2>Friday, April 8, 2011</h2>
        <p></p>
		<p><b>Liberty Science Center</b>, Liberty State Park, 222 Jersey City Blvd., Jersey City, NJ 07305</p>
        <p>
        <p>All Gala proceeds will benefit Liberty Science Center’s exhibitions and programs, which
			offer exceptional experiences for learners of all ages – onsite, offsite and online.</p>
        <p></p>
		<p>Thank you for your generous support!</p>
		</div>
		<br />

<form id="theform" autocomplete="off" action="<?php echo Braintree_TransparentRedirect::url() ?>" method="post">
	<fieldset class="ticketinfo">
	    <legend>Pricing</legend>
		<div id="tickets">
			<h3> Raffle Tickets: </h3>
     		<dl>
			<label for="numberofraffle50">Raffle Ticket(s) at $50 each – Three Exclusive Offerings</label>
	        <select size="1" name="transaction[custom_fields][raffletickets50]" id="numberofraffle50">
	            <option selected="selected" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][raffletickets50]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>"><?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][raffletickets50]') : ''; if (empty($fieldValue)) {echo '--';} else {echo $fieldValue;}?></option>
				<option value="0">0</option>
	 			<option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
				<option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
	    	</select>
			</dl>
            <dl>
            <label for="numberofraffle20">Raffle Ticket(s) at $20 each – Exceptional Family Experience</label>
	        <select size="1" name="transaction[custom_fields][raffletickets20]" id="numberofraffle20">
	            <option selected="selected" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][raffletickets20]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>"><?php $fieldValue = isset($result) ? $result->valueForHtmlField( 'transaction[custom_fields][raffletickets20]') : ''; if (empty($fieldValue)) {echo '--';} else {echo $fieldValue;}?></option>
				<option value="0">0</option>
				<option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
				<option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
	    	</select>
   			</dl>
            
            <h3> Individual Tickets - I plan to attend the Gala; please reserve the following: </h3>
            
            <dl>
			<dt><label for="numberofticket1000">Mentor Ticket(s) @ $1,000 each</label></dt>
	        <dd><select size="1" name="transaction[custom_fields][indtickets1000]" id="numberofticket1000">
	            <option selected="selected" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][indtickets1000]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>"><?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][indtickets1000]') : ''; if (empty($fieldValue)) {echo '--';} else {echo $fieldValue;}?></option>
				<option value="0">0</option>
	 			<option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
				<option value="5">5</option>
	    	</select></dd>
			</dl>
            
            <dl>
			<dt><label for="numberofticket500">Assistant Ticket(s) @ $500 each</label></dt>
	        <dd><select size="1" name="transaction[custom_fields][indtickets500]" id="numberofticket500">
	            <option selected="selected" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][indtickets500]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>"><?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][indtickets500]') : ''; if (empty($fieldValue)) {echo '--';} else {echo $fieldValue;}?></option>
				<option value="0">0</option>
	 			<option value="1">1</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
				<option value="5">5</option>
	    	</select></dd>
			</dl>
            
           <h3>Donation:</h3>
           <h4>I am not able to attend the Gala or I want to give an additional flat donation. Please accept my tax-deductible contribution of:</h4>    
			<div id="radiodiv">
            <input type="radio" name="don" id="don0" value="0" autocomplete="off" /><label for="don0" class="radios">None</label>
			<input type="radio" name="don" id="don1000" value="1000" autocomplete="off" /><label for="don1000" class="radios">$1,000</label>
	        <input type="radio" name="don" id="don500" value="500" autocomplete="off" /><label for="don500" class="radios">$500</label>
			<input type="radio" name="don" id="don250" value="250" autocomplete="off" /><label for="don250" class="radios">$250</label>
	        <input type="radio" name="don" id="don100" value="100" autocomplete="off" /><label for="don100" class="radios">$100</label>
			<input type="radio" name="don" id="don75" value="75" autocomplete="off" /><label for="don75" class="radios">$75</label>
	        <input type="radio" name="don" id="don50" value="50" autocomplete="off" /><label for="don50" class="radios">$50</label>
			<input type="radio" name="don" id="don25" value="25" autocomplete="off" /><label for="don25" class="radios">$25</label>
			<input type="radio" name="don" id="donother" value="" autocomplete="off" /><label for="donother" class="radios">Other</label>
			<span id="otheramount" style="position:absolute;margin-top:-3px;display:inline;">
            <span style="color: red;font-size:14px;">$</span>
			<input type="text" name="other" id="other" size="12" maxlength="7" value="" />
			</span>
			<input type="hidden" id="donationamount" name="transaction[custom_fields][donationamount]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][donationamount]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>" />
		</div>
	      <h3>Program Advertising <i>(all ads are color and in full bleed sizes)</i></h3>
<div id="adspace">
          <table width="100%">
          <tr>
          <td width="50%"><input type="checkbox" name="goldfullpage" id="goldpg" value="2500"/><label for="goldpg" class="checkbox">Gold Full Page $2,500 7”x 9”</label> </td>
		  <input type="hidden" id="hgoldpg" name="transaction[custom_fields][goldfullpage]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][goldfullpage]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>" />
		
		  <td><input type="checkbox" name="fullpage" id="fullpg" value="1000" /><label for="fullpg" class="checkbox">Full Page $1,000 7”x 9”</label></td>
		<input type="hidden" id="hfullpg" name="transaction[custom_fields][fullpage]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][fullpage]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>" /></tr>
		
		  <tr>
		  <td width="50%"><input type="checkbox" name="silverfullpage" id="silverpg" value="2000" /><label for="sliverpg" class="checkbox">Sliver Full Page $2,000 7”x 9”</label></td>
		  <input type="hidden" id="hsilverpg" name="transaction[custom_fields][silverfullpage]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][silverfullpage]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>" />
		
		  <td><input type="checkbox" name="halfpage" id="halfpg" value="500" /><label for="halfpg" class="checkbox">Half Page $ 500 7”x 4.25”</label></td>
		<input type="hidden" id="hhalfpg" name="transaction[custom_fields][halfpage]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][halfpage]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>"/></tr>
		
          <tr>
		  <td width="50%"><input type="checkbox" name="bronzefullpage" id="bronzepg" value="1500" /><label for="bronzepg" class="checkbox">Bronze Full Page $1,500 7”x 9”</label></td>
		  <input type="hidden" id="hbronzepg" name="transaction[custom_fields][bronzefullpage]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][bronzefullpage]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>" />
		
		  <td><input type="checkbox" name="quarterpage" id="quarterpg" value="250" /><label for="quarterpg" class="checkbox">Quarter Page $ 250 3.25”x 4.25”</label></td>
<input type="hidden" id="hquarterpg" name="transaction[custom_fields][quarterpage]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][quarterpage]') : ''; if (empty($fieldValue)) {echo '0';} else {echo $fieldValue;}?>" /></tr>

          </table>
          </div>
		  <div id="adspecs">
		  <h3>Ad Specifications:</h3>
		  		<p>1. E-mail high resolution, color (or black and white), PDF files to <a href="mailto:kthompson@lsc.org">kthompson@lsc.org</a>;
				<br /><i>Subject: Gala Ad</i>. Please embed all images and convert all fonts to outlines prior to making your PDF file.</p>
		  		<p>2. For type-set copy, please email copy to <a href="mailto:kthompson@lsc.org">kthompson@lsc.org</a>; <i>Subject: Gala Ad</i></p>
				<p>3. For business card ads (quarter-page ad), please mail to:<br />
				<i>Kathleen Thompson, Liberty Science Center, Liberty State Park,
				<br />222 Jersey City Boulevard, Jersey City, NJ 07305</i></p>
					
				<p><b>All ads and copy must be received by Monday, March 21, 2011.</b></p>
<p><b>For Ad Journal Centerfold, Inside Front Cover, Inside Back Cover and Back Cover:
To reserve these premium pages, please contact Kathleen Thompson in the Development Office at <a href="mailto:kthompson@lsc.org">kthompson@lsc.org</a> or 201.253.1447.</b></p>
		</div>
	</fieldset>
   
	<fieldset class="perinfo">
    	<legend>Personal Information</legend>
		<dl>
		<dt><label for="salutation">Salutation<em>*</em></label></dt>
        <dd><select size="1" name="transaction[custom_fields][salutation]" class="validate[required]" id="salutation">
            <option selected="selected" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][salutation]') : ''; if (empty($fieldValue)) {echo '';} else {echo $fieldValue;}?>"><?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][salutation]') : ''; if (empty($fieldValue)) {echo 'Choose One';} else {echo $fieldValue;}?></option>
			<option value="Ms.">Ms.</option>
            <option value="Mrs.">Mrs.</option>
			<option value="Mr.">Mr.</option>
            <option value="Dr.">Dr.</option>
    	</select></dd>
		</dl>
		
		<table border="0" width="100%">
			<tbody>
				<tr>
					<td>
						<label for="firstname">First Name<em>*</em></label>
						<input type="text" name="transaction[customer][first_name]" id="firstname" size="25" maxlength="50" class="validate[required]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[customer][first_name]') : ''; echo $fieldValue ?>" />
					</td>
					<td>
						<label for="lastname">Last Name<em>*</em></label>
						<input type="text" name="transaction[customer][last_name]" id="lastname" size="25" maxlength="50" class="validate[required]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[customer][last_name]') : ''; echo $fieldValue ?>" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="middlename">Middle Name</label>
						<input type="text" name="transaction[custom_fields][middlename]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][middlename]') : ''; echo $fieldValue ?>" id="middlename" size="20" maxlength="50" />
					</td>
					<td>
						<label for="companyorg">Company/Org.</label>
						<input type="text" name="transaction[customer][company]" id="companyorg" size="25" maxlength="50" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[customer][company]') : ''; echo $fieldValue ?>" />
					</td>
				</tr>
		
				<tr>
					<td>
						<label for="email">Email<em>*</em></label>
						<input type="text" name="transaction[customer][email]" id="email" size="27" maxlength="50" class="validate[required,custom[email]]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[customer][email]') : ''; echo $fieldValue ?>" />
					</td>
					<td>
						<label for="email-cfrm">Confirm E-mail<em>*</em></label>
						<input type="text" name="transaction[custom_fields][emailcfrm]" id="emailcfrm" size="27" maxlength="50" class="validate[required,confirm[email]]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][emailcfrm]') : '';echo $fieldValue?>"/>
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="phonenumber">Phone Number<em>*</em></label>
						<input type="text" name="transaction[customer][phone]" id="phonenumber" size="18" minlength="10" maxlength="12" class="validate[required,length[10,15]]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[customer][phone]') : ''; echo $fieldValue ?>" />
					</td>
					<td>
						<label for="phonetype">Phone Type</label>
						<select size="1" name="transaction[custom_fields][phonetype]" id="phonetype">
							<option value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][phonetype]') : ''; if (empty($fieldValue)) {echo '';} else {echo $fieldValue;}?>" selected="selected"><?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][phonetype]') : ''; if (empty($fieldValue)) {echo 'Choose One';} else {echo $fieldValue;}?></option>
            				<option value="Home">Home</option>
            				<option value="Mobile">Mobile</option>
            				<option value="Business">Business</option>
            				<option value="Other">Other</option>
    					</select>
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="address1">Address Line 1<em>*</em></label>
						<input type="text" name="transaction[custom_fields][address1]" id="address1" size="27" maxlength="50" class="validate[required]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][address1]') : ''; echo $fieldValue ?>"  />
					</td>
					<td>
						<label for="address2">Address Line 2</label>
						<input type="text" name="transaction[custom_fields][address2]" id="address2" size="20" maxlength="50" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][address2]') : ''; echo $fieldValue ?>"  />
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="city">City<em>*</em></label>
						<input type="text" name="transaction[custom_fields][city]" id="city" size="20" maxlength="50" class="validate[required]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][city]') : ''; echo $fieldValue ?>" />
					</td>
					<td>
						<label for="state">State<em>*</em></label>
						<select size="1" name="transaction[custom_fields][state]" id="state" class="validate[required]">
            				<option value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][state]') : ''; if (empty($fieldValue)) {echo '';} else {echo $fieldValue;}?>" selected="selected"><?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][state]') : ''; if (empty($fieldValue)) {echo 'Select a state...';} else {echo $fieldValue;}?></option>
							              <option value="Alabama">Alabama</option>
							              <option value="Alaska">Alaska</option>
							              <option value="Arizona">Arizona</option>
							              <option value="Arkansas">Arkansas</option>
							              <option value="California">California</option>
							              <option value="Colorado">Colorado</option>
							              <option value="Connecticut">Connecticut</option>
							              <option value="District of Columbia">District of Columbia</option>
							              <option value="Delaware">Delaware</option>
							              <option value="Florida">Florida</option>
							              <option value="Georgia">Georgia</option>
							              <option value="Hawaii">Hawaii</option>
							              <option value="Idaho">Idaho</option>
							              <option value="Illinois">Illinois</option>
							              <option value="Indiana">Indiana</option>
							              <option value="Iowa">Iowa</option>
							              <option value="Kansas">Kansas</option>
							              <option value="Kentucky">Kentucky</option>
							              <option value="Louisiana">Louisiana</option>
							              <option value="Maine">Maine</option>
							              <option value="Maryland">Maryland</option>
							              <option value="Massachusetts">Massachusetts</option>
							              <option value="Michigan">Michigan</option>
							              <option value="Minnesota">Minnesota</option>
							              <option value="Mississippi">Mississippi</option>
							              <option value="Missouri">Missouri</option>
							              <option value="Montana">Montana</option>
							              <option value="Nebraska">Nebraska</option>
							              <option value="Nevada">Nevada</option>
							              <option value="New Hampshire">New Hampshire</option>
							              <option value="New Jersey">New Jersey</option>
							              <option value="New Mexico">New Mexico</option>
							              <option value="New York">New York</option>
							              <option value="North Carolina">North Carolina</option>
							              <option value="North Dakota">North Dakota</option>
							              <option value="Ohio">Ohio</option>
							              <option value="Oklahoma">Oklahoma</option>
							              <option value="Oregon">Oregon</option>
							              <option value="Pennsylvania">Pennsylvania</option>
							              <option value="Rhode Island">Rhode Island</option>
							              <option value="South Carolina">South Carolina</option>
							              <option value="South Dakota">South Dakota</option>
							              <option value="Tennessee">Tennessee</option>
							              <option value="Texas">Texas</option>
							              <option value="Utah">Utah</option>
							              <option value="Vermont">Vermont</option>
							              <option value="Virginia">Virginia</option>
							              <option value="Washington">Washington</option>
							              <option value="West Virigina">West Virginia</option>
							              <option value="Wisconsin">Wisconsin</option>
							              <option value="Wyoming">Wyoming</option>
										  <option value="Outside the United States">Outside the United States</option>
    					</select>
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="zipcode">Zip Code<em>*</em></label>
						<input type="text" name="transaction[custom_fields][zipcode]" id="zipcode" size="17" maxlength="10" class="validate[required,length[0,10]]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][zipcode]') : ''; echo $fieldValue ?>"  />
					</td>
					<td>
						<label for="twitter">Twitter Handle</label>
						<input type="text" name="transaction[custom_fields][twitter]" id="twitter" size="25" maxlength="40" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][twitter]') : ''; echo $fieldValue ?>"  />
					</td>
				</tr>
			</tbody>
		</table>
		
		<br /><div id="extratext"> 
			<input type="checkbox" name="contactme_run" id="contactme" value="Yes"/>
			<input type="hidden" id="h_contactme" name="transaction[custom_fields][contactme]" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][contactme]') : ''; echo $fieldValue;?>" />
			
			<label for="contactme">I would like to be contacted about future events, exhibitions, IMAX films and special programs at Liberty Science Center.  We will never rent or sell your email address.</label><br /><br />
		</div>
		<!--Changes made by RDR-->
	</label>
			<span id="listedblock"> 
			<label for="listedname">As a supporter of Liberty Science Center, how would you like to be listed? Please include your full name and/or family name.<em>*</em></label><br /> <br />
			<input type="text" name="transaction[custom_fields][listedname]" id="listedname" size="25" maxlength="50" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[custom_fields][listedname]') : ''; echo $fieldValue ?>"  /></span>
			 
		
		<!--Changes made by RDR-->
    </fieldset>

	<fieldset class="ccinfo">
				<legend>Credit Card Information</legend>
				
				<dl class="amountdl">
		        	<dt><label style="padding-top:5px;" for="Amount">Amount</label></dt>
		            <dd><span style="color: red;font-size:14px;">$</span><input style="font-size: 14px;" type="text" name="transaction[amount]" id="amount" size="10" maxlength="5" readonly="readonly" autocomplete="off" value="<?php $fieldValue = isset($result) ? $result->valueForHtmlField('transaction[amount]') : ''; if (empty($fieldValue)) { echo '';} else {echo $fieldValue; } ?>"/></dd>
		        </dl>

				<dl>
					<dt style="padding-top:12px;font-size:11.5px;"><i>Accepted Cards:</i></dt>
					<dd><img src='/assets/images/credit_card_logos.jpg' width='239' height='43' border='0' alt='Credit Card Logos'/></dd>
				</dl>

				<dl>
					<dt><label for="credit_card_num">Card Number<em>*</em></label></dt>
		            <dd><input type="text" name="transaction[credit_card][number]" id="credit_card_num" size="25" maxlength="19" minlength="12" class="validate[required,length[12,19]]" /></dd>
				</dl>
				
				<dl>
			    	<dt><label for="expMonth">Card Expiration Date<em>*</em></label></dt>
			        <dd>
			        	<select size="1" name="transaction[credit_card][expiration_month]" id="expMonth">
			            	<option value="01">Jan</option>
			                <option value="02">Feb</option>
			                <option value="03">Mar</option>
			                <option value="04">Apr</option>
			                <option value="05">May</option>
			                <option value="06">Jun</option>
			                <option value="07">Jul</option>
			                <option value="08">Aug</option>
			                <option value="09">Sep</option>
			                <option value="10">Oct</option>
			                <option value="11">Nov</option>
			                <option value="12">Dec</option>
			            </select>
			            <select size="1" name="transaction[credit_card][expiration_year]" id="expYear">
			                <option value="2011">2011</option>
			                <option value="2012">2012</option>
			                <option value="2013">2013</option>
			                <option value="2014">2014</option>
			                <option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
			            </select>
			        </dd>
			    </dl>
				
				<dl>
					<dt><label for="cardholder_name">Name of Card Holder<em>*</em></label></dt>
		            <dd><input type="text" name="transaction[credit_card][cardholder_name]" id="cardholder_name" size="35" maxlength="60" class="validate[required]" /></dd>
					<!-- <input type="hidden" name="transaction[customer][first_name]" id="customername" value="" /> -->
				</dl>
				
				<dl>
					<dt><label for="cvc">Card Verification Code<em>*</em></label></dt>
		            <dd><input type="text" name="transaction[credit_card][cvv]" id="cvc" size="10" maxlength="4" minlength="3" class="validate[required]" />
						<span style="padding-left:4px;"><a href='http://www.win2pdf.com/store/help/EN/cvn.html' target='blank'>What's This</a></span>
					</dd>
				</dl>
				
				<input type="hidden" name="transaction[custom_fields][eventtype]" value="Gala 2011" />
				<input type="hidden" name="transaction[custom_fields][accountcode]" value="3430" />
				<input type="hidden" name="transaction[custom_fields][dept]" value="653000" />
				
				<input type="hidden" name="transaction[custom_fields][concode]" value="Individual" />
				<input type="hidden" name="transaction[custom_fields][primaddid]" value="134" />
				<input type="hidden" name="transaction[custom_fields][primsalid]" value="68" />
				<input type="hidden" name="transaction[custom_fields][emailtype]" value="Email1" />
				<input type="hidden" name="transaction[custom_fields][keyind]" value="I" />
				
				<input type="hidden" name="transaction[custom_fields][solicit]" value="" id="solicit" />
				
				<?php $tr_data = Braintree_TransparentRedirect::transactionData(
				            array('transaction' => array(
									'type' => 'sale',
									'options' => array(
										'submitForSettlement' => true
											)
										),
									'redirectUrl' => 'https://www.lsc.org/lsc_secure/gala2011',
									)
								); ?>
				
				<input type="hidden" name="tr_data" value="<?php echo $tr_data ?>" />
			</fieldset>
			
    <fieldset class="action">
		<span style="font-size:14px;">By clicking on <b>Submit</b> below, you are agreeing to our <a href='http://www.lsc.org/privacypolicy' target='_blank' title='Privacy Policy'>Privacy Policy</a> and authorizing this transaction.</span><br /><br />
	
    	<input type="submit" name="submit" id="submit" value="Submit" />
		<input type="button" name="reset" id="reset" value="Reset"/>
    </fieldset>
</form>
<br />
	<div id="securetrans" style="text-align:center; margin-left:-5px;">
	<span style="text-align:center;"><script language="JavaScript" type="text/javascript">
	SiteSeal("https://seal.networksolutions.com/images/basicrecgreen.gif", "NETSP", "none");</script>
	<a href="https://www.braintreegateway.com/merchants/gyhjr5t848dj7bpy/verified" target="_blank">
	<img src="https://braintree-badges.s3.amazonaws.com/05.png" border="0"/>
	</a></span>
	<p>We process all donations and purchases using an industry standard, SSL encrypted payment system.</p>
	<p>For this form, we <b>strongly</b> recommend and support the following browsers:<br /><b>Firefox, Chrome, Safari, Internet Explorer 7 & 8</b>.</p> 
	<p>If you have any questions about this form or your transaction, please email <a href="mailto:web@lsc.org" alt="web@lsc.org"> web@lsc.org.</a></p>
	<p>If you have Gala 2011 related inquiries or questions, please contact Kathleen Thompson in the Development Office at <a href="mailto:kthompson@lsc.org">kthompson@lsc.org</a> or 201.253.1447.</p>	
	</div>
<?php } ?>
<script type="text/javascript">
$('#phonenumber').numeric();
$('#credit_card_num').numeric();
$('#cvc').numeric();
$('#other').numeric({allow:"."});
</script>
<br />
</div>
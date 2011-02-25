<!--INDEX.PHP, THE VIEW FOR GALA 2011 FORM-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
header("Pragma: no-cache");
header("cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ('PATH/html_header.php');
?>
</head>
<body>
	<div id="root">
		<?php include ('PATH/top.php');?>
		<div id="left" style="margin-top:0px;">
			<?php include ('INCLUDE LEFT COLUMN IMAGE(S)');?>
		</div>
		
		<div id="content">
			<?php include ('PATH/gala2011.php');?>
		</div>
		
		<div id="footer">
			<?php include('INSERT FOOTER MENU OPTIONS'); ?>
	        <ul>
				<li>Liberty Science Center * Liberty State Park * 222 Jersey City Boulevard * Jersey City, NJ * 07305 * 201.200.1000 * sales@lsc.org</li>
	       		<li> * copyright &copy; 2010 by Liberty Science Center</li></ul>
		</div>
	</div>
		
	</body>
	</html>

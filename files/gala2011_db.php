<?php
function update_lsc_db($result) {
if(isset($result) && $result->success)
  {
    $info = $result->transaction->customFields; 
    $info["datetime"] = null;
    $info["firstname"] = $result->transaction->customerDetails->firstName;
    $info["lastname"] = $result->transaction->customerDetails->lastName;
    $info["email"] = $result->transaction->customerDetails->email;
    $info["phonenumber"] = $result->transaction->customerDetails->phone;
    $info["company"] = $result->transaction->customerDetails->company;
    $info["dbamount"] = $result->transaction->amount;
    $info["orderid"] = $result->transaction->id;
    $info["cardtype"] = $result->transaction->creditCardDetails->cardType;

	$info["addrid"] = $result->transaction->id;
	$info["emailid"] = $result->transaction->id;
	$info["phoneid"] = $result->transaction->id;
	
	if(empty($info["company"])) {
		$info["company"] = 'No Organization';
	}
	
	if(empty($info["phonetype"])) {
		$info["phonetype"] = 'Home';
	}

    $sql = "INSERT INTO MYSQLTABLE (";


    $s_fld = array_keys($info);
    $s_values = array_values($info);

    for($i = 0; $i < count($s_fld); $i++)
      {
	switch($s_fld[$i]){
	  //Skip these
	case "emailcfrm":
	  continue(2);
	default:
	  $sql .= "I_" . $s_fld[$i];
	  break;
	}

	if($i+1 < count($s_fld))
	  $sql .= ", ";
      }

    $sql .= ") VALUES (";

    for($i = 0; $i < count($s_values); $i++)
      {

	//Input conversion
	switch(strtolower($s_values[$i]))
	  {
	  case "on":
	  case "true":
          case "yes":
	    $s_values[$i] = 1;
	    break;
	  case "off":
	  case "false":
          case "no":
	    $s_values[$i] = 0;
	    break;
	  }

	switch($s_fld[$i]){
	  //Skip these
	case "emailcfrm":
	  continue(2);
	case "datetime":
	  $sql .= "NOW()";
	  break;
	default:
	  $sql .= "'" . str_replace("'", "", $s_values[$i]) . "'";
	  break;
	}

	if($i+1 < count($s_fld))
	  $sql .= ", ";
      }

    $sql .= ")";



    //$sql = mysql_escape_string($sql);
    $c = mysql_connect("LOCALHOST", "MYSQL USER", "MYSQL PASSWORD");

    if($c)
      {
	mysql_select_db("MYSQLDB", $c);
	mysql_query($sql, $c);

	$e = mysql_error($c);

	$sql = str_replace("\"", "\\\"", $sql);

      }
  }
}
?>

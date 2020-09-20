<?php

	/**
		Do not forget to enable openssl in your php.ini file by removing the coma before:
		extension=php_openssl.dll
		and then restart your server
		This is needed to submit external https requests
	**/

	//Function that submits the request to external currency server
	function convert_currency($amount, $from_currency, $to_currency) {
		$api_key="3e23c68c2ce17355e03a";
		$from_currency=urlencode($from_currency);
  		$to_currency=urlencode($to_currency);
  		$query=$from_currency."_".$to_currency;
  		ob_start();
  		$result=file_get_contents("https://free.currconv.com/api/v7/convert?q=".$query."&compact=ultra&apiKey=".$api_key);
  		ob_clean();
  		if($result==false)
  			return -1;
  		$obj=json_decode($result, true);
  		$val=floatval($obj[$query]);
  		$total=$val*$amount;
  		return number_format($total, 5, ".", "");
	}

	$from="";
	$to="";

	//Get parameters
	if(isset($_POST["from"]) && strlen($_POST["from"])==3)
		$from=htmlspecialchars($_POST["from"]);
	else if(isset($_GET["from"]) && strlen($_GET["from"])==3)
		$from=htmlspecialchars($_GET["from"]);

	if(isset($_POST["to"]) && strlen($_POST["to"])==3)
		$to=htmlspecialchars($_POST["to"]);
	else if(isset($_GET["to"]) && strlen($_GET["to"])==3)
		$to=htmlspecialchars($_GET["to"]);

	//Return result
	header("Content-type: text/javascript");
	if(strlen($from)>0 && strlen($to)>0)
		echo(json_encode(convert_currency(1, strtoupper($from), strtoupper($to))));
	else
		echo(json_encode(-1));
?>
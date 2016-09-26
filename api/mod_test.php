<?php
	//test api add gold
	/*
	$user="payment";
	$password="Bi@c0h1aSwQOU%GMDF1CfbkO";
	$Key  ="S^Ge$mqP@=Y_8&bTVr?sD080990";
	$strAuth="$user:$password";
	//////////params
	$username= "chucuit080990";
	$sid = 999;
	$gold = 10;
	$transactionid = time().md5($username);
	///////////create sign
	$timestamp = time();
	$auth=base64_encode($username.$timestamp);
	$sign=md5($auth.$Key);
	//////////////
	$url="http://10.90.31.254/?m=addgold";
	$params = "username={$username}&transactionid={$transactionid}&gold={$gold}&sid={$sid}&tstamp={$timestamp}&sign={$sign}";
	
	//echo $params;
	$ch = curl_init();     
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_USERPWD,$strAuth); 
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
	$result = curl_exec($ch); 
	curl_close($ch);  
	echo $result;
	$result=json_decode($result);
	echo "<pre>";
	print_r($result);
	exit();
	*/
	////////////test add items
	//test api add gold
	$user="promotion";
	$password="Bi@c0h1aSwQOU%GMDF1CfbkO";
	$Key  ="S^Ge$mqP@=Y_8&bTVr?sD080990";
	$strAuth="$user:$password";
	//////////params
	$username= $_GET['username'];
	$sid = $_GET['sid'];
	$items = "101494,101495";
	$quantity = "10,10";
	$transactionid = time().md5($username);
	///////////create sign
	$timestamp = time();
	$auth=base64_encode($username.$timestamp);
	$sign=md5($auth.$Key);
	//////////////
	$url="http://10.90.31.254/?m=additems";
	//http://10.90.31.254/?m=additems&username=gt.hiennn&transactionid=423232131233321123&items=101003&quantity=1000&sid=999
	$params = "username={$username}&transactionid={$transactionid}&items={$items}&quantity={$quantity}&sid={$sid}&tstamp={$timestamp}&sign={$sign}";
	$ch = curl_init();     
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_USERPWD,$strAuth); 
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
	$result = curl_exec($ch); 
	curl_close($ch);  
	echo $result;
	$result=json_decode($result);
	echo "<pre>";
	print_r($result);
	////////////test add items
	
?>
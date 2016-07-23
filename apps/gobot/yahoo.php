<?php

	//$proxy="144.16.192.213";
	//$port="8080";
	
	if ($_POST['submit'])
	{
		$q = $_POST['input'];
	}
	//$q = 'ramanujan';
	
	$url = '';
	
	$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
	
	$url .= rawurlencode('select ');
	
	$url .= '*' . rawurlencode(' from boss.search where q="');
	
	$url .= urlencode($q) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
	
	$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');


	$ch = curl_init(); 

	//curl_setopt($ch,CURLOPT_PROXYPORT,$port);
	//curl_setopt($ch, CURLOPT_PROXY, $proxy);

	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

	$output = curl_exec($ch); 
	curl_close($ch);
	$data = simplexml_load_string($output);

	//print_r($data);
	
	
	foreach($data->results->bossresponse->web->results->result as $e)
	{
		echo '<a href=" ' . $e->url . ' ">' . $e->title . '</a>' . '<br />' . $e->abstract .' <br />';
	}

?>
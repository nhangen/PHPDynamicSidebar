<?php
	//build feed URL's
	function feed1()	{
	$xmlhome = simplexml_load_file("xmlfeedurl");
	foreach ($xml1->entry as $entry) {
		//create item variables
		$title = $entry->title;
		$content = $entry->content;
		$link = $entry->link->attributes()->href;
		
		echo "<strong><a href='$link'>$title</a></strong><br/><hr />";
	}}
	
	function feed2()	{
	$xmlarts = simplexml_load_file("xmlfeedurl");
	
	foreach ($xml2->entry as $entry) {
		//create item variables
		$title = $entry->title;
		$content = $entry->content;
		$link = $entry->link->attributes()->href;
		
		echo "<strong><a href='$link'>$title</a></strong><br/><hr />";
	}}
	
	function feed3() {
	$xmlfestivals = simplexml_load_file("xmlfeedurl");
	
	foreach ($xml3->entry as $entry) {
		//create item variables
		$title = $entry->title;
		$content = $entry->content;
		$link = $entry->link->attributes()->href;
		
		echo "<strong><a href='$link'>$title</a></strong><br/><hr />";
	}}
	
	function feed4() {
	$xmlmuseums = simplexml_load_file("xmlfeedurl");	
	
	foreach ($xml4->entry as $entry) {
		//create item variables
		$title = $entry->title;
		$content = $entry->content;
		$link = $entry->link->attributes()->href;
		
		echo "<strong><a href='$link'>$title</a></strong><br/><hr />";
	}}
	
	function feed5() {
	$xmlperforming = simplexml_load_file("xmlfeedurl");
	
	foreach ($xml5->entry as $entry) {
		//create item variables
		$title = $entry->title;
		$content = $entry->content;
		$link = $entry->link->attributes()->href;
		
		echo "<strong><a href='$link'>$title</a></strong><br/><hr />";
	}}
	
	function feed6() {
	$xmlsports = simplexml_load_file("xmlfeedurl");
	
	foreach ($xml6->entry as $entry) {
		//create item variables
		$title = $entry->title;
		$content = $entry->content;
		$link = $entry->link->attributes()->href;
		
		echo "<strong><a href='$link'>$title</a></strong><br/><hr />";
	}}
?>
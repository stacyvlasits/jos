<?php

class TitleLinkPair{

	public $sortTitle = ''; 
	
	public $title = '';
	
	public $grammar_topic_name = '';
	
	public $link = '';

	public function __construct($var1, $var2, $var3, $var4){
		$this->sortTitle = $var1;
		$this->title = $var2;
		$this->grammar_topic_name = $var3;
		$this->link = $var4;
	}
}

?>
<?php
include ( "../../base_web_test_case.php" );

class test_alex_index extends base_web_test_case
{
	public function setUp ()
	{
		$this->get ( "http://localhost:8888/pegisis/alex/" );
	}
	
	public function testLinkToAbout ()
	{
		$this->clickLink ( 'About' );
	}
}
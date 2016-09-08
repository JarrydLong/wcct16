<?php

class UnitTests extends \PHPUnit_Framework_TestCase{

	use PHPMock;

	public function test_wcct_get_option(){
		$this->assertEquals('river-club', wcct_get_option('venue'));
	}

}
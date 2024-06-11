<?php


use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase {
	public function test_it_sees_class_from_auto_prepend() {
		$this->assertNotNull(new Prepended());
	}
}
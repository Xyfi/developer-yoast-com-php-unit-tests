<?php

namespace Xyfi\Hello_Rammstein\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * TestCase base class.
 */
abstract class TestCase extends BaseTestCase {
	/**
	 * Tests for expected output.
	 *
	 * @param string $expected    Expected output.
	 * @param string $description Explanation why this result is expected.
	 */
	protected function expectOutput( $expected, $description = '' ) {
		$output = \ob_get_contents();
		\ob_clean();

		$output   = \preg_replace( '|\R|', "\r\n", $output );
		$expected = \preg_replace( '|\R|', "\r\n", $expected );

		$this->assertEquals( $expected, $output, $description );
	}
}

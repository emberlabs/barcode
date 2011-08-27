<?php
/**
 *
 * @package     Barcode Creator
 * @copyright   (c) 2011 emberlabs.org
 * @license     http://opensource.org/licenses/mit-license.php The MIT License
 * @link        https://github.com/samt/barcode
 *
 * Minimum Requirement: PHP 5.3.0
 */

namespace emberlabs\Barcode;

/**
 * emberlabs Barcode Creator - Data Matrix
 * 	     Generate Data Matrix
 *
 *
 * @license     http://opensource.org/licenses/mit-license.php The MIT License
 * @link        https://github.com/samt/barcode
 */
class DataMatrix extends BarcodeBase
{
	/*
	 * Set the data
	 *
	 * @param mixed data - (int or string) Data to be encoded
	 * @return instance of \emberlabs\Barcode\BarcodeInterface
	 * @return throws \OverflowException
	 */
	public function setData($data)
	{
	}

	/*
	 * (Abstract) Draw the image
	 *
	 * @return void
	 */
	public function draw()
	{
	}
}

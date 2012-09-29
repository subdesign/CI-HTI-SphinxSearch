<?php

/**
 * Sprinkle - Asset management library
 * 
 * @author   			Edmundas Kondrašovas <as@edmundask.lt>
 * @license  			http://www.opensource.org/licenses/MIT
 */

namespace Sprinkle\Filters;

require_once(SPRINKLE_ROOT .'/libraries/Filter_Interface.php');
require_once(SPRINKLE_ROOT .'/vendor/JSMin/JSMin.php');

/**
* JsMin Filter
*/

class jsmin extends Sprinkle_Filter
{
	protected $_settings = array();

	/**
	* Output
	*
	* @access	public
	* @param 	Asset 	asset object
	* @return	string	path to the temporary file
	*/

	public function output(\Sprinkle\Asset $asset)
	{
		$buffer = $asset->get_contents();

		$processed = \JSMin::minify($buffer);

		return $this->_save_file($asset, $processed);
	}
}
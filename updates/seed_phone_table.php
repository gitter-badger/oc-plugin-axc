<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\AxC\Updates
 */

namespace AxC\AxC\Updates;

use AxC\DataManagement\Models\Phone;

/**
 * Add data to Phone DB scheme.
 */
class SeedPhoneTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Phone::truncate();

		$pos = 1;

		Phone::create( [
			'type' => 'mobile',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 348-74.85.497'
		] );
	}
}
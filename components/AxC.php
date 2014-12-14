			<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\AxC\Components
 */

namespace AxC\AxC\Components;

use AxC\AxC\Models\Settings as SettingsModel;

/**
 * AxC component class
 */
class AxC extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.axc::lang.component.name'),
			'description'	=> trans('axc.axc::lang.component.description')
		];
	}

	/**
	 * Return the setting values.
	 * @return array
	 */
	public function settings()
	{
		return SettingsModel::instance();
	}
}
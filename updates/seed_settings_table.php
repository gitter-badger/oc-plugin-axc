<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\AxC\Updates
 */

namespace AxC\AxC\Updates;

use AxC\AxC\Models\Settings;
use AxC\AddThis\Models\Settings as AddThisSettings;
use AxC\Segment\Models\Settings as SegmentSettings;
use AxC\reCAPTCHA\Models\Settings as reCAPTCHASettings;
use RainLab\GoogleAnalytics\Models\Settings as GoogleAnalyticsSettings;
use System\Models\MailSettings;
use AnandPatel\SeoExtension\models\Settings as SeoExtensionSettings;
use Backend\Models\BrandSettings;

/**
 * Add data to AxC Settings DB scheme.
 */
class SeedSettingsTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Settings::set('name', 'AxC');
		Settings::set('full_name', 'Alex (eXperience) Carrega');
		Settings::set('slogan', 'Advance - eXperience - Connection');
		Settings::set('about', 'TODO');

		Settings::set('address_street_name', 'via Giulia');
		Settings::set('address_street_number', '2');
		Settings::set('address_street_int', '5');
		Settings::set('address_zip', '15060');
		Settings::set('address_city', 'Stazzano');
		Settings::set('address_province', 'AL');
		Settings::set('address_country', 'IT');

		AddThisSettings::set('pubid', 'ra-5481b82b1ff99f90');

		SegmentSettings::set('write_key', 'ar48yc8hbv');

		$ga_settings = GoogleAnalyticsSettings::instance();
		$ga_settings->project_name = 'alexcarrega-com';
		$ga_settings->client_id = '716962334615-glbe8kco29bqv9rhhphrd4ut7qket793.apps.googleusercontent.com';
		$ga_settings->app_email =  '716962334615-glbe8kco29bqv9rhhphrd4ut7qket793@developer.gserviceaccount.com';
		$ga_settings->profile_id = '70185283';
		$ga_settings->tracking_id = 'UA-39297686-1';
		$ga_settings->domain_name = 'axc';
		$ga_settings->save();

		$mail_settings = MailSettings::instance();
		$mail_settings->send_mode = 'smtp';
		$mail_settings->sender_name = 'Alex Carrega (AxC)';
		$mail_settings->sender_email = 'contact@alexcarrega.com';
		$mail_settings->smtp_address ='smtp.gmail.com';
		$mail_settings->smtp_port = '587';
		$mail_settings->smtp_user = 'contact@alexcarrega.com';
		$mail_settings->smtp_password = 'p3p3r1n0';
		$mail_settings->smtp_authorization = '1';
		$mail_settings->smtp_ssl = '1';
		// @todo: tls?
		$mail_settings->save();

		$seo_extension_settings = SeoExtensionSettings::instance();
		$seo_extension_settings->enable_title = '1';
		$seo_extension_settings->enable_canonical_url = '1';
		$seo_extension_settings->title = '| AxC';
		$seo_extension_settings->title_position = 'suffix';
		$seo_extension_settings->other_tags = "<meta name=\"author\" content=\"Alex Carrega (AxC - http:\/\/www.alexcarrega.com)\">\r\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" \/>\r\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" \/>\r\n<meta name=\"description\" content=\"Contact page\" \/>\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
		$seo_extension_settings->save();

		$brand_settings = BrandSettings::instance();
		$brand_settings->app_name = 'AxC';
		$brand_settings->app_tagline = 'Alex Carrega (AxC)';
		$brand_settings->primary_color_light = '#5bc0de';
		$brand_settings->primary_color_dark = '#4472C4';
		$brand_settings->secondary_color_light = '#f0ad4e';
		$brand_settings->secondary_color_dark = '#C00000';
		$brand_settings->save();

		$recaptcha_settings = reCAPTCHASettings::instance();
		$recaptcha_settings->public_key = '6LeZAvASAAAAAMdffcqD_spxmsLmqUGANP8d64ZG';
		$recaptcha_settings->private_key = '6LeZAvASAAAAAIrgZjwFrAXP9UruZylHqdUlc57N';
		$recaptcha_settings->save();

		// @p-color: #4472C4;
		// @s-color: #70AD47;
		// @bg-color: #FFFFFF;
		// @i-color: #5bc0de;
		// @w-color: #f0ad4e;
		// @d-color: #C00000;
	}
}
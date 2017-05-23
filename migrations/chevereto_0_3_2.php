<?php
/**
*
* @package phpBB Extension - Chevereto API
* @copyright (c) 2017 Lord Beaver
* @license https://opensource.org/licenses/BSD-3-Clause The 3-Clause BSD License
*
*/
namespace lordbeaver\chevereto\migrations;

class chevereto_0_3_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return;
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('chevereto_debug', '0')),
			array('config.add', array('chevereto_subdomain', '0')),
		);
	}
}
<?php
/*
* SiteSense
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@sitesense.org so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade SiteSense to newer
* versions in the future. If you wish to customize SiteSense for your
* needs please refer to http://www.sitesense.org for more information.
*
* @author     Full Ambit Media, LLC <pr@fullambit.com>
* @copyright  Copyright (c) 2011 Full Ambit Media, LLC (http://www.fullambit.com)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
function admin_pluginsBuild($data,$db){
	if(file_exists('plugins/'.basename($data->action[3]).'/install.php')){
		common_include('plugins/'.basename($data->action[3]).'/install.php');
	}
	if(function_exists(basename($data->action[3]).'_settings')){
		$settings=call_user_func(basename($data->action[3]).'_settings');
	}
	$moduleUrl='https://sitesense.org/dev/version/modules?modules['.$data->action[3].']='.$settings['version'];
	$ch = curl_init($moduleUrl);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	$plugin=curl_exec($ch);
	$plugin=json_decode($plugin,TRUE);
	$plugin=$plugin[$data->action[3]];
	$data->output['update']=$plugin;
}
function admin_pluginsShow($data) {
	theme_showUpdateInstructions($data);
}
?>
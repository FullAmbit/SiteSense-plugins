<?php

function languages_plugins_admin_en_us(){
	return array(
		'core' => array(
            'plugins'                        => 'Plugins',
            'permission_plugins_access'      => 'Plugins access',
            'permission_plugins_edit'        => 'Edit plugins',
            'permission_plugins_disable'     => 'Disable plugins',
            'permission_plugins_enable'      => 'Enable plugins',
            'permission_plugins_list'        => 'List plugins'
		),
		'installerOutput'                  => 'Installer Output',
		'installSuccess'                   => 'Install Success!',
		'returnToPlugins'                  => 'Return To Plugins',
		'changesWereSaved'                 => 'The changed were saved.',
		'please'                           => 'Please',
		'clickHere'                        => 'click here',
		'toReturnToThePlugins'             => 'to return to the plugins.',
		'success'                          => 'Success!',
		'pluginEnabled'                    => 'Plugin successfully enabled!',
		'pluginEnabledSuccessMessage'      => 'You have successfully disabled the plugin. 
		The data stored by this plugin are still in the database, but the 
		plugin is disabled from user access. If you would like to remove all 
		of the data stored by this plugin from the database then click 
		uninstall. But beware, this data will be gone forever.',
	    'uninstallPlugin'                  => 'Uninstall Plugin',
	    'returnToTheListOfPlugins'         => 'Return to the List of Plugins',
	    'pluginSuccessfullyUninstalled'    => 'Plugin successfully uninstalled!',
	    'pluginSuccessfullyDisabled'       => 'Plugin successfully disabled!',
	    'save'                             => 'Save',
	    'modifyingPlugin'                  => 'Modifying Plugin',
	    'insuficientPrameters'             => 'insufficient parameters',
	    'noPluginNameEntered'              => 'No plugin name specified',
	    'improperInstallFile'              => 'Improper installation file',
	    'uninstallFunctionNotFound'        => 'The plugin uninstall function could not be found within the plugin installation file.',
	    'pluginNotFound'                   => 'The plugin you specified could not be found.',
	    'coreSiteSensePluginError'         => 'This plugin is auto-loaded by SiteSense for core functionality.',
		'updateHeader'                     => 'Update %s plugin',
		'updateInstructions'               => 'To update %s, follow these instructions. First, <a href="%s">download the latest .zip for this plugin.</a>. Unzip it and enter the folder with "%s" 
			in the name. Then log in to the FTP server which your site is on. Go to the root of your SiteSense installation and upload the "plugins" directory from the zip and overwrite the "plugins" directory on the FTP with it. Once you\'ve done that, you\'re done!',
	);
}
?>
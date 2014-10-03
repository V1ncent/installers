<?php
namespace Composer\Installers;

class CustomInstaller extends BaseInstaller
{
	protected $locations = array(
		'default'    => 'vendor/{$vendor}/{$name}/',
	);
}

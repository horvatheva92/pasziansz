<?php
/**
 * EasyPHP Devserver: a complete development environment
 * @author   Laurent Abbal <laurent@abbal.com>
 * @link     http://www.easyphp.org
 */

// EDS ini
$edsini = parse_ini_file("../eds.ini");

if (($edsini['Autostart_httpserver'] == 1) AND (file_exists('conf_last_httpserver.php'))) {
	copy('conf_last_httpserver.php','conf_httpserver.php');
	include('conf_last_httpserver.php');	
	if (strstr($conf_httpserver['httpserver_folder'],'apache')) exec('eds-app-launch "..\eds-binaries\httpserver\\' . $conf_httpserver['httpserver_folder'] . '\bin\eds-httpserver.exe"');
	if (strstr($conf_httpserver['httpserver_folder'],'nginx')) {
		exec('cd "..\eds-binaries\httpserver\\' . $conf_httpserver['httpserver_folder'] . '\" && eds-app-launch eds-httpserver.exe');		
		$php_command = 'cd "..\eds-binaries\php\\' . $conf_httpserver['php_folder'] . '\" && eds-app-launch php-cgi.exe -b 127.0.0.1:9000';
		exec($php_command);
	}
}

if (($edsini['Autostart_dbserver'] == 1) AND (file_exists('conf_last_dbserver.php'))) {
	copy('conf_last_dbserver.php','conf_dbserver.php');
	include('conf_last_dbserver.php');	
	if (strstr($conf_dbserver['dbserver_folder'],'mysql')) exec('eds-app-launch "..\eds-binaries\dbserver\\' . $conf_dbserver['dbserver_folder'] . '\bin\eds-dbserver.exe"');
}
?>
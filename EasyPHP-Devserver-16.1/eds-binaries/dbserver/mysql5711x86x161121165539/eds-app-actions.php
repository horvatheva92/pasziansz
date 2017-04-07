<?php
/**
 * EasyPHP Devserver: a complete development environment
 * @author   Laurent Abbal <laurent@abbal.com>
 * @link     http://www.easyphp.org
 */

// Variables
$server_folder = $_POST['action']['variable']['server_folder'];

// MYSQL CONFIGURATION FILES

// Update my.ini
$serverconffile = file_get_contents('..\eds-binaries\dbserver\\' . $server_folder . '\my.ini');

	// Update socket
	$replacement = '${1}' . str_replace('\\', '/', __DIR__) . '/mysql.sock$3';
	$serverconffile = preg_replace('/^([\s|\t]*socket.*\")(.*)(\".*)$/m', $replacement, $serverconffile);

	// Update basedir
	$replacement = '${1}' . str_replace('\\', '/', __DIR__) . '/$3';
	$serverconffile = preg_replace('/^([\s|\t]*basedir.*\")(.*)(\".*)$/m', $replacement, $serverconffile);	
	
	// Update datadir
	$replacement = '${1}' . str_replace('\\', '/', __DIR__) . '/data/$3';
	$serverconffile = preg_replace('/^([\s|\t]*datadir.*\")(.*)(\".*)$/m', $replacement, $serverconffile);	

	// Update logerror
	$replacement = '${1}' . str_replace('\\', '/', __DIR__) . '/data/mysql_error.log$3';
	$serverconffile = preg_replace('/^([\s|\t]*log_error.*\")(.*)(\".*)$/m', $replacement, $serverconffile);	

	// Update innodb_data_home_dir
	$replacement = '${1}' . str_replace('\\', '/', __DIR__) . '/data/$3';
	$serverconffile = preg_replace('/^([\s|\t]*innodb_data_home_dir.*\")(.*)(\".*)$/m', $replacement, $serverconffile);
	
	// Update innodb_log_group_home_dir
	$replacement = '${1}' . str_replace('\\', '/', __DIR__) . '/data/$3';
	$serverconffile = preg_replace('/^([\s|\t]*innodb_log_group_home_dir.*\")(.*)(\".*)$/m', $replacement, $serverconffile);	

file_put_contents ('..\eds-binaries\dbserver\\' . $server_folder . '\my.ini', $serverconffile);


// CONF_DBSERVER.PHP
$conf_dbserver_content = '<?php' . "\r\n";
$conf_dbserver_content .= '$conf_dbserver = array();' . "\r\n";
$conf_dbserver_content .= '$conf_dbserver = array(' . "\r\n";
$conf_dbserver_content .= "\t" . '"dbserver_folder" => "' . $server_folder . '",' . "\r\n";
$conf_dbserver_content .= "\t" . '"dbserver_port" => "3306",' . "\r\n";
$conf_dbserver_content .= ');' . "\r\n";
$conf_dbserver_content .= '?>';
file_put_contents ('conf_dbserver.php', $conf_dbserver_content);
?>
<?php
/**
 * EasyPHP Devserver: a complete development environment
 * @author   Laurent Abbal <laurent@abbal.com>
 * @link     http://www.easyphp.org
 */

exec('eds-app-stop.exe -accepteula "eds-httpserver"');
$conf_httpserver_content = '<?php' . "\r\n";
$conf_httpserver_content .= '$conf_httpserver = array();' . "\r\n";
$conf_httpserver_content .= '?>';
file_put_contents ('conf_httpserver.php', $conf_httpserver_content);

include('conf_last_dbserver.php');
if (!empty($conf_dbserver)) {
	if (strstr($conf_dbserver['dbserver_folder'],'mysql')) exec('eds-app-launch "..\eds-binaries\dbserver\\' . $conf_dbserver['dbserver_folder'] . '\bin\mysqladmin" -u root shutdown');
	$conf_dbserver_content = '<?php' . "\r\n";
	$conf_dbserver_content .= '$conf_dbserver = array();' . "\r\n";
	$conf_dbserver_content .= '?>';
	file_put_contents ('conf_dbserver.php', $conf_dbserver_content);
}
?>
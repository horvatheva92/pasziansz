<?php
/**
 * EasyPHP Devserver: a complete development environment
 * @author   Laurent Abbal <laurent@abbal.com>
 * @link     http://www.easyphp.org
 */

exec('eds-app-stop.exe -accepteula "eds-httpserver"');
include('../eds-binaries/httpserver/' . basename(dirname(__FILE__)) . '/eds-app-actions.php');
exec('eds-app-launch "..\eds-binaries\httpserver\\' . basename(dirname(__FILE__)) . '\bin\eds-httpserver.exe"');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work #1</title>
</head>
<body>
<?php
date_default_timezone_set('Europe/Belgrade');
require 'Mobile_Detect.php';

$detect = new Mobile_Detect;
$device = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

$ipAddress = getIpAddress();
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (!isset($_COOKIE['visited'])) {
    setcookie('visited', 'yes', time() + 2 * 60);
    insertIntoStatistic($userAgent, $device, $ipAddress);
}

echo "<h1>Welcome</h1>";
echo "<p>your device is: $device</p>";
echo "<p>your ip is: $ipAddress</p>";
echo "<p>your user agent is: $userAgent</p>";

?>
</body>
</html>
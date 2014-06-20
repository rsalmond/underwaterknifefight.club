<?PHP
$dir = '/var/www/uwkf/images/';
$files = scandir($dir);

unset($files[0]);
unset($files[1]);

$filename = $dir.$files[array_rand($files, 1)];

$fp = fopen($filename, 'rb');

header("Content-Type: image/jpeg");
header("Content-Length: " . filesize($filename));

fpassthru($fp);
?>

<?php
$file = 'Орнамент.png';
$filesize=51190506;
header('Content-disposition: attachment; filename=Орнамент.png');
header('Content-type: image/png');
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
header("Content-Length: " . $filesize);
    if (ob_get_level()) {
      ob_end_clean();
    }
	
readfile($file);
exit();
?>
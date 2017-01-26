<?php
$url = getenv("REDIRECT_TO_URL");
header("Location: " . $url , true, 301);
exit();
?>

<?php
header("Pragma: no-cache");
header("Cache-Control: no-store, no-cache, max-age=0, must-revalidate");
header('Content-Type: application/json');
//header("X-JSON: ". "{$content_for_layout}"); //これ有効にすると動作しない
echo $content_for_layout;
?>
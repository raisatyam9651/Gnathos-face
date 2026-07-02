<?php
// 301 Permanent Redirect from /blog/ to /blogs/
header("HTTP/1.1 301 Moved Permanently");
header("Location: ../blogs/");
exit();
?>

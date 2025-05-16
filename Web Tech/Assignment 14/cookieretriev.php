<?php
$cookie_name = "user";

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie value is: " . $_COOKIE[$cookie_name];
}
?>

<html>
<body>
<p>Go to <a href="cookie_set.php">Cookie Set Page</a> to set cookie data again.</p>
</body>
</html>

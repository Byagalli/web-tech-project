<?php
$cookie_name = "user";
$cookie_value = "Ganesh Byagalli";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
<body>

<h2>Cookie Set!</h2>
<p>Go to <a href="cookie_retrieve.php">Cookie Retrieve Page</a> to see the stored cookie data.</p>

</body>
</html>

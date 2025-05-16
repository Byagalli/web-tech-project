<?php
session_start();

if(!isset($_SESSION['user'])) {
  echo "Session named 'user' is not set!";
} else {
  echo "Session value is: " . $_SESSION['user'];
}
?>

<html>
<body>
<p>Go to <a href="session_store.php">Session Store Page</a> to store session data again.</p>
</body>
</html>

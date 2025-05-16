<?php
session_start();
$_SESSION['user'] = "Ganesh Byagalli";
?>

<html>
<body>

<h2>Session Data Stored!</h2>
<p>Go to <a href="session_retrieve.php">Session Retrieve Page</a> to see the stored session data.</p>

</body>
</html>

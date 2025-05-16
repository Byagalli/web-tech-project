<?php
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];

    // Validate inputs
    if (!empty($username) && !empty($email)) {
        $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "✅ New user added successfully!";
            echo "<br><a href='add_user.html'>Add Another</a>";
            echo "<br><a href='show_users.php'>View Users</a>";
        } else {
            echo "❌ Error: " . $conn->error;
        }
    } else {
        echo "Please enter valid data.";
    }

    $conn->close();
}
?>

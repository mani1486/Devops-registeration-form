<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$role = htmlspecialchars($_POST['role']);
$comments = htmlspecialchars($_POST['comments']);
// Save to a file (you can use a database instead)
$entry = "$name, $email, $role, $comments\n";
file_put_contents("registrations.txt"

, $entry, FILE_APPEND);

echo "<h2>Thank you for registering, $name!</h2>";
echo "<p>We look forward to seeing you at the DevOps event.</p>";
}
?>
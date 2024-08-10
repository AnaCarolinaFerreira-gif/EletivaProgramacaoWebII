
    <?php
$servername = "seu_servername";
$username = "seu_username";
$password = "sua_password";
$dbname = "seu_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


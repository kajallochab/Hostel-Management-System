<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM laundry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    echo "<center>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Floor: " . $row["floor"] . ":    " . $row["day"] . "</li>";
    }
    echo "</center>";
    echo "</ul>";
}

$conn->close();
?>

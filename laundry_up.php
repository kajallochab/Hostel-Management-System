<?php
$db = mysqli_connect("localhost", "root", "", "project");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through posted data to update the database
    foreach ($_POST as $key => $value) {
        // Check if the key starts with "day" (indicating it's a day input)
        if (substr($key, 0, 3) === "day") {
            $floorNumber = substr($key, 3); // Extract the floor number from the key
            $day = mysqli_real_escape_string($db, $value); // Avoid SQL injection

            // Update the database with the new day for the specific floor
            $updateSql = "UPDATE laundry SET day = '$day' WHERE floor = $floorNumber";

            if ($db->query($updateSql) !== true) {
                echo "Error updating record: " . $db->error;
            }
        }
    }

    header("location: index.php");
}

$db->close();
?>

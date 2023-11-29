<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Laundry Data</title>
    <style>
         body {
            background-image: url('Hostel-3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
    font-family: 'Arial', sans-serif;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f2f2f2;
}

.container {
    background-color: #fff;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.edit-section {
    max-width: 600px;
}

.floor-row {
    margin-bottom: 15px;
}

label {
    display: inline-block;
    width: 120px;
    font-weight: bold;
}

select {
    width: 150px;
    padding: 5px;
}

input[type="submit"] {
    margin-top: 15px;
    padding: 10px;
    background-color: #000066;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* input[type="submit"]:hover {
    background-color: #45a049;
} */
    </style>
</head>
<body>

    <div class="container">
        <div class="edit-section">
            <h2>Edit Laundry Data</h2>
            <form action="laundry_up.php" method="post">
                <?php
                $db = mysqli_connect("localhost", "root", "", "project");
                if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                }

                $daysOfWeek = [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday",
                ];

                $sql = "SELECT * FROM laundry";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='floor-row'>";
                        echo "<label for='floor{$row["floor"]}'>{$row["floor"]}th Floor:</label>";
                        echo "<select name='day{$row["floor"]}' id='floor{$row["floor"]}'>";
                        foreach ($daysOfWeek as $day) {
                            $selected = $day == $row["day"] ? "selected" : "";
                            echo "<option value='$day' $selected>$day</option>";
                        }
                        echo "</select>";
                        echo "</div>";
                    }
                } else {
                    echo "No data available";
                }

                $db->close();
                ?>
                <input type="submit" value="Save Changes">
            </form>
        </div>
    </div>

</body>
</html>

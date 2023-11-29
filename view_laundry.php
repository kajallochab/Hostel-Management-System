<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Laundry Catalogue</title>
    <style>
body {
            background-image: url('Hostel-.jpg');
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
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}



.view-section {
    max-width: 1000px; /* Increase max-width further for larger bubble */
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px; /* Increase margin further for larger text */
    font-size: 24px; /* Increase font size further for larger text */
    font-weight: bold;
    border: 1px solid #ccc; /* Add a border for a more defined appearance */
    padding: 5px 10px; /* Add padding to separate text from the border */
}


    </style>
</head>
<body>

    <div class="container">
        <div class="view-section">
            <center>
            <h2>Laundry Catalogue</h2>
            </center>
            <?php include "view.php"; ?>
        </div>
    </div>

</body>
</html>

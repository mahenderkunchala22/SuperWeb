<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>In-Person Retail Survey - Super Web Inc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <img src="logo.png" alt="Logo" class="logo">
    </div>
    <?php include 'navigation.php'; ?>
    <div class="form-container">
        <h2>In-Person Retail Survey</h2>
        <form method="POST" action="process_in_person.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="location">Location (City, State):</label>
            <input type="text" id="location" name="location" required>

            <label for="favorite_in_person">Favorite In-Person Retailer:</label>
            <input type="text" id="favorite_in_person" name="favorite_in_person" required>

            <label for="shopping_frequency">Shopping Frequency:</label>
            <select id="shopping_frequency" name="shopping_frequency" required>
                <option value="">Select</option>
                <option value="Daily">Daily</option>

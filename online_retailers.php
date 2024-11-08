<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Retail Survey - Super Web Inc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <img src="logo.png" alt="Logo" class="logo">
    </div>
    <?php include 'navigation.php'; ?>
    <div class="form-container">
        <h2>Online Retail Survey</h2>
        <form method="GET" action="process_online.php">
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

            <label for="favorite_online">Favorite Online Retailer:</label>
            <input type="text" id="favorite_online" name="favorite_online" required>

            <label for="shopping_frequency">Shopping Frequency:</label>
            <select id="shopping_frequency" name="shopping_frequency" required>
                <option value="">Select</option>
                <option value="Daily">Daily</option>
                <option value="Weekly">Weekly</option>
                <option value="Monthly">Monthly</option>
            </select>

            <label for="payment_method">Preferred Payment Method:</label>
            <input type="text" id="payment_method" name="payment_method" required>

            <label for="average_spend">Average Monthly Spend:</label>
            <input type="number" id="average_spend" name="average_spend" required>

            <label for="factors">Factors Influencing Your Choice:</label>
            <input type="text" id="factors" name="factors" required>

            <label for="category">Favorite Category:</label>
            <input type="text" id="category" name="category" required>

            <label for="security_importance">Importance of Security:</label>
            <input type="text" id="security_importance" name="security_importance" required>

            <input type="submit" value="Submit" class="submit-button">
        </form>
    </div>
</body>
</html>

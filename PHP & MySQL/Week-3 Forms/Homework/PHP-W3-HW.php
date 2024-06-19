<!DOCTYPE html>
<html>
<head>
    <title>Week 3 Homework: Survey Form Design</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Survey Form</h1>
    
    <!-- Add PHP Form Validation -->
    
    <?php
    // TODO: Declare Variables


    // TODO: Sanatize Data
    
        // TODO: Validate Data

    // TODO: Sanatization Function

    ?>

<!-- Survey Form -->
<!-- Update Form Action & Form Method -->
<!-- Update to Display Errors & Success Messages -->
<form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label>Gender:</label>
        <div class="radio-group">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </div>

        <label for="interests">Interests:</label>
        <div class="radio-group">
            <input type="checkbox" id="sports" name="interests" value="sports">
            <label for="sports">Sports</label>
            <input type="checkbox" id="music" name="interests" value="music">
            <label for="music">Music</label>
            <input type="checkbox" id="travel" name="interests" value="travel">
            <label for="travel">Travel</label>
        </div>
            <br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="usa">United States</option>
            <option value="canada">Canada</option>
            <option value="uk">United Kingdom</option>
        </select><br><br>

        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

<!-- TODO: Add Form Response -->

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: Include for basic styling -->
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form action="calculate.php" method="POST">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" required>
        <br><br>
        
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" required>
        <br><br>
        
        <label for="operation">Choose Operation:</label>
        <select name="operation">
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (*)</option>
            <option value="divide">Divide (/)</option>
        </select>
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    <h2>Semester Result Calculator</h2>
    
    <!-- Semester Result Form -->
    <form method="POST" action="calculate.php"> <!-- Self-submitting the form -->
        <label for="attendance">Attendance (Out of 10):</label>
        <input type="number" name="attendance" min="0" max="10" required><br><br>

        <label for="assignment">Assignment (Out of 10):</label>
        <input type="number" name="assignment" min="0" max="10" required><br><br>

        <label for="classTest">Class Test (Out of 10):</label>
        <input type="number" name="classTest" min="0" max="10" required><br><br>

        <label for="mid">Mid (Out of 30):</label>
        <input type="number" name="mid" min="0" max="30" required><br><br>

        <label for="final">Final (Out of 40):</label>
        <input type="number" name="final" min="0" max="40" required><br><br>

        <button type="submit" name="calculate">Calculate Total</button>
    </form>

    <!-- PHP Code for Semester Calculator -->
   
</body>
</html>

<?php
// Check if form data is set and process it
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";

    // Perform the selected operation
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            $operationSign = '+';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $operationSign = '-';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $operationSign = '*';
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $operationSign = '/';
            } else {
                $result = "Error! Division by zero.";
            }
            break;
        default:
            $result = "Invalid operation selected!";
            break;
    }

    // Display the result
    echo "<h2>Calculation Result</h2>";
    echo "<p>{$num1} {$operationSign} {$num2} = {$result}</p>";
    echo "<br><a href='index.php'>Go Back</a>";
} else {
    echo "Error: Invalid input!";
}


    // semester result
    if (isset($_POST['calculate'])) {
        // Get form data
        $attendance = $_POST['attendance'];
        $assignment = $_POST['assignment'];
        $classTest = $_POST['classTest'];
        $mid = $_POST['mid'];
        $final = $_POST['final'];

        // Calculate total marks
        $total = $attendance + $assignment + $classTest + $mid + $final;

        // Display the result
        echo "<h3>Total Marks: {$total} / 100</h3>";

        // Optional: Determine the grade based on total marks
        if ($total >= 90) {
            $grade = 'A+';
        } elseif ($total >= 80) {
            $grade = 'A';
        } elseif ($total >= 70) {
            $grade = 'B';
        } elseif ($total >= 60) {
            $grade = 'C';
        } elseif ($total >= 50) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<h3>Grade: {$grade}</h3>";
        echo "<br><a href='index.php'>Go Back</a>";
    }
    

?>
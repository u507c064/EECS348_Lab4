<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>EECS 348 Lab 4 Practice 4</h1>

    <!-- Form to accept a number input -->
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["num"]); // Get user input and convert to integer

        if ($num > 0) {
            echo "<h2>Multiplication Table for $num</h2>";
            echo "<table>";

            // First row - Column headers
            echo "<tr><th>*</th>";
            for ($i = 1; $i <= $num; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Table content
            for ($i = 1; $i <= $num; $i++) {
                echo "<tr><th>$i</th>"; // Row header
                for ($j = 1; $j <= $num; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } 
    }
    ?>
</body>
</html>

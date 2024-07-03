<!DOCTYPE html>
<html>
<head>
    <title>View Latest Movement</title>
    <style>
        body {
            background-color: #09000c;
            font-family: Arial, sans-serif;
            color: white; /* Set body text color to white */
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 50px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: white; /* Set table cell text color to white */
        }
        th {
            background-color: rgb(17, 90, 30);
        }
        tr:hover {
            background-color: #2eb022;
        }
        .center {
            text-align: center;
            color: white; /* Set center class text color to white */
        }
    </style>
</head>
<body>
    <h2 class="center">Latest Movement Record</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Direction</th>
        </tr>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => training
        $conn = mysqli_connect("localhost", "root", "", "training");
        
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        // Fetch the latest record from the table1
        $sql = "SELECT * FROM table1 ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['direction'] . "</td>";
                echo "</tr>";
            } else {
                echo "<tr><td colspan='2' class='center'>No records found.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2' class='center'>ERROR: Could not execute $sql. " . mysqli_error($conn) . "</td></tr>";
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>

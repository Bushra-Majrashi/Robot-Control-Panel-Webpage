<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
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
        
        // Taking the value from the form data (input)
        $name = $_REQUEST['btn'];
        
        
        $sql = "INSERT INTO table1 (id, direction) VALUES (NULL, '$name')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>

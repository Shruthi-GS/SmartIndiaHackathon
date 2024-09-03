<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => login
        // port => 3308
        $conn = mysqli_connect("localhost", "root", "", "login", 3308);

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all values from the form data(input)
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $udid = $_REQUEST['udid'];
        $phoneno = $_REQUEST['phoneno'];
        $password = $_REQUEST['password'];

        // Performing insert query execution
        // here our table name is users
        $sql = "INSERT INTO users VALUES ('$first_name',
            '$last_name','$gender','$address','$email','$udid','$phoneno','$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully."
                . " Please browse your localhost phpMyAdmin"
                . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email\n $udid\n $phoneno\n $password");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>

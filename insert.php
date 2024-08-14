<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
$host = 'database-1.c5u8ksk2gp91.ap-south-1.rds.amazonaws.com'; // Replace with your RDS endpoint
$port = '3306'; // Default MySQL port
$dbname = 'user2'; // Replace with your database name
$username = 'admin'; // Replace with your database username
$password = '1234tanu'; // Replace with your database password
        
        //*$conn = mysqli_connect("localhost", "root", "", "user2");

        // Check connection
        //if($conn === false){
         //   die("Could not connect. "
          //      . mysqli_connect_error());
       // }
// Create a connection
$mysqli = new mysqli($host, $username, $password, $dbname, $port);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connected successfully!";
}

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        $message = $_REQUEST['message'];
           

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO info1 VALUES ('$name',
            '$email','$number','$message')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully. </h3>";

        } else{
            echo "Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>

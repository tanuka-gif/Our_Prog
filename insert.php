<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        
        $conn = mysqli_connect("localhost", "root", "", "user2");

        // Check connection
        if($conn === false){
            die("Could not connect. "
                . mysqli_connect_error());
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

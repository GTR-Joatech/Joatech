<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input for username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>Sucesfull<h1> ";
    echo "<h1>YOu can loogin now<h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
<body>
    <form action="index.html">
        <input type="submit" value="Login">
    </form> 
</body>


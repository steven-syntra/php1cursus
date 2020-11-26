<h1>MySQLi Example</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "steven123";
$dbname = "steden";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//define and execute query
$sql = "select * from images";
$result = $conn->query($sql);

//show result (if there is any)
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo $row["img_id"] . "<br>";
        echo $row["img_filename"] . "<br>";
        echo $row["img_title"] . "<br>";
        echo "w:" . $row["img_width"] . "<br>";
        echo "h:" . $row["img_height"] . "<br>";
        echo "<br>";
    }
}
else
{
    echo "No records found";
}

$conn->close();
?>
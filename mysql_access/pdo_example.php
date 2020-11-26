<h1>PDO Example</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "steven123";
$dbname = "steden";

// Create and check connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//define and execute query
$result = $conn->query("select * from images");

//show result (if there is any)
if ( $result->rowCount() > 0 )
{
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    // output data of each row
    foreach ($rows as $row)
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

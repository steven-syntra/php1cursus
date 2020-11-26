<h1>MySQLi Example</h1>

<?php
require_once "connection.php";

var_dump( $_GET ) ;
print "<br>";

//define and execute query
$sql = "select * from team where tea_id=" . $_GET['id'] ;
$result = $conn->query( $sql );

//show result (if there is any)
if ($result->num_rows > 0)
{
    // output data of each row
    while( $row = $result->fetch_assoc() )
    {
        echo $row["tea_id"] . "<br>";
        echo $row["tea_naam"] . "<br>";
        echo $row["tea_stadion"] . "<br>";
        echo "<br>";
    }
}
else
{
    echo "No records found";
}

$conn->close();
?>

<h1>MySQLi Example</h1>

<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "connection_data.php";
require_once "connection.php";

var_dump( $_GET ) ;
print "<br>";


//validate GET argument
if ( ! is_numeric($_GET['id']))
{
    die("Wrong parameter");
}


//define and execute query
$sql = "select * from team where tea_id=" . $_GET['id'] ;
print $sql . "<br>";
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

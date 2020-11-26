<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$student =	array(
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",
    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
);

//function call
StudentToTable($student);

//function declaration
function StudentToTable( $student )
{
    $output = "<h1>Student</h1>";

    $output .= "<table>";

    foreach( $student as $field => $value )
    {
        //$field = strtoupper(substr($field,0,1)) . substr($field,1);
        $field = ucfirst($field);
        $output .= "<tr>";
        $output .= "<td>$field</td>";
        $output .= "<td>$value</td>";
        $output .= "</tr>";
    }
    $output .= "</table>";

    print $output;
}
?>

<?php
require_once "autoload.php";
require_once "csv_export_functions.php";

$data = GetData( "select * from eu_btw_codes" );

PrintCSVHeader("eu_btw_codes");
print "Land;BTW Code;Hyperlink;\r\n";

foreach ( $data as $row )
{
    $land = str_replace(" ", "_", trim($row['eub_land']));
    $hyperlink = "https://nl.wikipedia.org/wiki/" . $land;
    print $land . ";" . $row['eub_code']. ";" . $hyperlink . ";" . "\r\n";
}
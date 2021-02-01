<?php
function PrintCSVHeader( $filename )
{
    // CSV header
    header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Type: application/csv-tab-delimited-table");
    header("Content-disposition: attachment; filename=".$filename.".csv");

    //this line tells Excel that the character set is UTF-8
    //so make sure to convert your output to UTF-8 if needed
    echo "\xEF\xBB\xBF";
}

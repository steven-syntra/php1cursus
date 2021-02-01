<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access = false;
require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "BTW Codes in Europa" ,
                        $subtitle = "" );
PrintNavbar();
?>

<div class="container">
    <div class="row">

<?php
    //toon messages als er zijn
    foreach ( $msgs as $msg )
    {
        print '<div class="msgs">' . $msg . '</div>';
    }

    //get data
    $data = GetData( "select * from eu_btw_codes" );

    $output ="";
    $output .= "<a class='btn btn-info' role='button' href='lib/export_btw.php'>Export CSV</a>";
    $output .= "<div><br></div>";

    $output .= "<table class='table table-striped'>";
    $output .= "<tr><th>Land</th><th>BTW Code</th><th>Edit</th></tr>";

    foreach ( $data as $row )
    {
        $land = str_replace(" ", "_", trim($row['eub_land']));
        $hyperlink = "https://nl.wikipedia.org/wiki/" . $land;
        $hyperlink_edit = "btw_form.php?eub_id=" . $row['eub_id'];
        $output .= "<tr>";
        $output .= "<td><a target=_new href='$hyperlink'>" . $row['eub_land']  . "</a></td>";
        $output .= "<td>" . $row['eub_code'] . "</td>";
        $output .= "<td><a class='btn btn-info' role='button' href=$hyperlink_edit>Edit</a></td>";
        $output .= "</tr>";
    }

    $output .= "</table>";

    print $output;
?>

    </div>
</div>

</body>
</html>
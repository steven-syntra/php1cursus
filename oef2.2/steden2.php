<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/pdo.php";
require_once "lib/html_functions.php";

PrintHead();
PrintJumbo();
?>

<div class="container">
    <div class="row">

<?php

    //get data
    $rows = GetData( "select * from images" );

    //get template
    $template = file_get_contents("templates/column.html");

    //merge
    $html = MergeViewWithData( $template, $rows );
    print $html;
?>

    </div>
</div>

</body>
</html>
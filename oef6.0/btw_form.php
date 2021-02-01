<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access = false;
require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Detail EU BTW Code", $subtitle = "" );
PrintNavbar();
?>

<div class="container">
    <div class="row">

        <?php
            //get data
            $data = GetData( "select * from eu_btw_codes where eub_id=" . $_GET['eub_id'] );

            //get template
            $output = file_get_contents("templates/btw_form.html");

            //add extra elements
            $extra_elements['csrf_token'] = GenerateCSRF( "profiel.php"  );

            //merge
            $output = MergeViewWithData( $output, $data );
            $output = MergeViewWithExtraElements( $output, $extra_elements );
            $output = MergeViewWithErrors( $output, $errors );
            $output = RemoveEmptyErrorTags( $output, $data );

            print $output;
        ?>

    </div>
</div>

</body>
</html>
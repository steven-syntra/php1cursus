<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access = false;
require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Dropzone", $subtitle = "" );
PrintNavbar();
?>

<div class="container">
    <div class="row">

        <?php
        //dropzone om bestanden op te laden
        $output = file_get_contents("templates/dropzone.html");

        //overzicht van reeds opgeladen bestanden maken
        $opgeladen_bestanden = "";

        $files = scandir("img");    //lijst van alle bestanden in de map "img"
        foreach ( $files as $file )
        {
            if ( $file == "." OR $file == ".." ) continue;  // . en .. skippen

            //alle andere bestanden omvormen naar img tag in een div
            $opgeladen_bestanden .= '<div class="imgdiv"><img class="img-fluid" src="img/' . $file . '"></div>';
        }

        //merge
        $output = str_replace( "@opgeladen_bestanden@", $opgeladen_bestanden, $output);

        //output
        print $output;
        ?>

    </div>
</div>

</body>
</html>
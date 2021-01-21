<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access = false;
require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Datum en tijd - OO style", $subtitle = "" );
PrintNavbar();
?>

<div class="container">
    <div class="row">

        <?php

        //huidige datumtijd
        $d = new DateTime( 'NOW', new DateTimeZone('Europe/Brussels') );
        print "<div>json: <b>" . Arr2NiceJSON( $d ) . "</b></div>";
        print "<div>huidige datumtijd: <b>" . $d->format('Y-m-d H:i:s') . "</b><br><br></div>";

        //3 maanden verder
        $d->add( new DateInterval('P3M'));
        print "<div>3 maanden verder: <b>" . $d->format('Y-m-d H:i:s') . "</b><br><br></div>";

        //1 dag terug
        $d->sub( new DateInterval('P1D'));
        print "<div>1 dag terug: <b>" . $d->format('Y-m-d H:i:s') . "</b><br><br></div>";

        //laatste dag vd maand
        $d->modify('last day of this month');
        print "<div>laatste dag vd maand: <b>" . $d->format('Y-m-d H:i:s') . "</b><br><br></div>";

        ?>

    </div>
</div>

</body>
</html>

<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access = false;
require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Datum en tijd - klassieke functies", $subtitle = "" );
PrintNavbar();
?>

    <div class="container">
        <div class="row">

<?php
date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, 'nl_NL');

//de huidige systeemdatumtijd
$now = time();
print( "<div>de huidige systeemdatumtijd: <b>$now</b> </div>");

//de huidige datum
$strdate = date("d/m/Y", $now);
print( "<div>de huidige datum: <b>$strdate</b> </div>");

//de actuele tijd
$strtime = date("H:i:s", $now);
print( "<div>de actuele tijd: <b>$strtime</b> </div>");

//een array maken met alle mogelijke info over de huidige systeemdatumtijd
$mydate = getdate($now);
print( "<div>array met alle mogelijke info over de huidige systeemdatumtijd  <b>" . Arr2NiceJSON ($mydate) . "</b></div>");

//een timestamp maken voor een opgegeven datumtijd
$ts = mktime(14,30,0,3,21,2019);  //21/03/2019 14:30
print( "<div>timestamp voor een opgegeven datumtijd (21/03/2019 14:30): <b>$ts</b></div>");

//die datumtijd presentabel weergeven
$strdate = date("l d/m/Y h:i:s", $ts);
print( "<div>omgevormd: <b>$strdate</b></div>");

//twee weken later
$ts = mktime(14,30,0,3,21+14,2019);
$strdate = date("l d/m/Y h:i:s", $ts);
print( "<div>twee weken later: <b>$strdate</b></div>");

//laatste dag vorige maand
$ts = mktime(14,30,0,3,0,2019);  //let op de 0 voor de dagwaarde !!
$strdate = date("l d/m/Y h:i:s", $ts);
print( "<div>laatste dag vorige maand: <b>$strdate</b></div>");

//strtotime functies
print( "<div>allerlei berekende timestamps:</div>");
print( "<div><b>");
echo strtotime("now"), "<br>";
echo strtotime("10 September 2000"), "<br>";
echo strtotime("+1 day"), "<br>";
echo strtotime("+1 week"), "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br>";
echo strtotime("next Thursday"), "<br>";
echo strtotime("last Monday"), "<br>";
print( "</b></div>");
?>

        </div>
    </div>

</body>
</html>

<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/pdo.php";
require_once "lib/strings.php";

$head = file_get_contents( "templates/head.html" );
print $head;
?>

<div class="jumbotron text-center">
    <h1>Leuke plekken in Europaaa</h1>
    <p>Tips voor citytrips voor vrolijke vakantiegangers!</p>
</div>

<div class="container">
    <div class="row">

<?php

    $rows = GetData( "select * from images where img_published=1" );

    //loop over de afbeeldingen
    foreach ( $rows as $row )
    {
        $link_image = "img/" . $row['img_filename'];

        //de kolom met de titel en de afbeelding erin
        print '<div class="col-sm-4">';
        print '<h3>' . ReplaceSpecialChar($row['img_title']) . '</h3>';
        print '<p>' .  ReverseAndCaps($row['img_title']) . '</p>';
        print '<p>' .  $row['img_width'] . " x " . $row['img_height'] . ' pixels</p>';
        print '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';
        print '<img class="img-fluid" src="' . $link_image . '">';

        //hyperlink
        print '<a href=stad.php?img_id=' . $row['img_id'] . '>Meer info</a>';

        print '</div>' ;
    }

?>

    </div>
</div>

</body>
</html>
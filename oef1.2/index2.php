<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

//3 afbeeldingen in een array
$images = array( "berlin.jpg" => "Berlijn",
                                "paris.jpg" => "Parijs",
                                "london_2423609b.jpg" => "Londen" );

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Leuke plekken in Europa</h1>
    <p>Tips voor citytrips voor vrolijke vakantiegangers!</p>
</div>

<div class="container">
    <div class="row">

<?php

    //loop over de afbeeldingen
    foreach ( $images as $image => $title )
    {
        $link_image = "img/$image";

        //de kolom met de titel en de afbeelding erin
        /*
        print '<div class="col-sm-4">';
        print '<h3>' . $title . '</h3>';
        print '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';
        print '<img class="img-fluid" src="' . $link_image . '">';
        print '</div>' ;
        */

        print '<div class="col-sm-4">
                   <h3>' . $title . '</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                   <img class="img-fluid" src="' . $link_image . '">
                   </div>' ;
    }

?>

    </div>
</div>

</body>
</html>
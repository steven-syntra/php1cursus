<?php

if ( $_SERVER['REQUEST_METHOD'] == "POST" AND $_POST["submitButton"] == "OK" )
{
    var_dump( $_POST );
    die("Ik stop de verwerking");

    $sql = " INSERT INTO taak SET " ;
    $sql .= " taa_omschr = '" .  $_POST["taa_omschr"] . "' , ";
    $sql .= " taa_datum = '" .  $_POST["taa_datum"] . "' , ";
    $sql .= " taa_uren = '" .  $_POST["taa_uren"] . "' ";

    print $sql;

    $servername = "localhost";
    $username = "root";
    $password = "steven123";
    $dbname = "steden";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//define and execute query
    $result = $conn->query($sql);

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

    <form id=mainform name=mainform action="taak.php" method="post">

        <div class="form-group">
            <label for="taa_omschr">Taak omschrijving</label>
            <input type="text" class="form-control" id="taa_omschr" name="taa_omschr" placeholder="Taak omschrijving ...">
        </div>

        <div class="form-group">
            <label for="taa_datum">Datum</label>
            <input type="date" class="form-control" id="taa_datum" name="taa_datum" placeholder="Datum ...">
        </div>

        <div class="form-group">
            <label for="taa_uren">Uren werk</label>
            <input type="text" class="form-control" id="taa_uren" name="taa_uren" placeholder="Aantal uur ...">
        </div>

        <button id="submitButton" name="submitButton" type="submit" class="btn btn-primary" value="OK">Submit</button>

    </form>

</body>
</html>
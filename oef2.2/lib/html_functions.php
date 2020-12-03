<?php
function PrintHead()
{
    $head = file_get_contents("templates/head.html");
    print $head;
}

function PrintJumbo()
{
    $jumbo = file_get_contents("templates/jumbo.html");
    print $jumbo;
}
<?php

function ReplaceSpecialChar( $txt )
{
    $txt = str_replace("&euml;", "E", $txt);
    $txt = str_replace("&eacute;", "E", $txt);
    $txt = str_replace("&egrave;", "E", $txt);

    return $txt;
}

function ReverseAndCaps( $txt )
{
    $txt = strrev($txt);
    $txt = strtoupper($txt);

    return $txt;
}


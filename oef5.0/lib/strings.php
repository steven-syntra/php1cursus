<?php
function Arr2NiceJSON ( $array ): string
{
        return niceJSON( json_encode( $array ));
}

function niceJSON( string $json ) : string
{
    return '<pre>' . json_encode(json_decode($json), JSON_PRETTY_PRINT) . '</pre>';
}

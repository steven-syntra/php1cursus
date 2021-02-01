<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/$page");
    exit;
}


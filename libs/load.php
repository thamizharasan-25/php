<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";
}
function validates($Username, $Password)
{
    if ($Username == "A@gamil.com" and $Password == "tamil123") {
        return true;
    } else {
        return false;
    }
}

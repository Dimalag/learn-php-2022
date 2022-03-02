<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    processPost();
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    processGet();
} else {
    echo "ERROR";
}

function processGet()
{

}

function processPost()
{

}

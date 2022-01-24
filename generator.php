<?php
// php file to generate json for autozoom 

$monday = array(
    // "template" => array(
    //     "title" => "", // can be anything
    //     "platform" => "", // zoom or meet [OPT]
    //     "link" => "", // zoom join link (best with password) or meet link) [REQ]
    //     "time" => 0000, // 24 hour format [REQ]
    // ),
    array(
        "title" => "history",
        "platform" => "zoom",
        "link" => "https://us04web.zoom.us/",
        "time" => "07:45",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "08:25",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "09:05",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "10:10",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "10:50",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "11:30",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "12:10",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "12:50",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "13:25",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "14:05",
    ),
    array(
        "title" => "",
        "platform" => "",
        "link" => "",
        "time" => "14:40",
    ),
    "slots" => 10,
);

// start writing to file
$k = file_put_contents("monday.json",json_encode($monday));
if ($k)
{
    echo "Autozoom file generated. \n";
}

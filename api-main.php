<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

include('query-library/top-n-worst.php');
include('query-library/es-contribution.php');
include('query-library/real-time.php');
include('helpers/http_handler.php');


if ($_GET["dataType"]) {
    $dataType = $_GET["dataType"];
    switch ($dataType) {
        case "topNWorst":
            if(!isset($_GET["selector"]) || !isset($_GET["measure"]) || !isset($_GET["count"]) || !isset($_GET["interval"])) {
                http_response("Necessary parameters not defined");
            } else {
                queryTopNWorst($_GET["selector"], $_GET["measure"], $_GET["count"], $_GET["interval"]);
            }
            break;
        case "realTime":
            if(!isset($_GET["selector"]) || !isset($_GET["measure"]) || !isset($_GET["sourceID"]) || !isset($_GET["interval"])) {
                http_response("Necessary parameters not defined");
            } else {
                queryRealTime($_GET["selector"], $_GET["measure"], $_GET["sourceID"], $_GET["interval"]);
            }
            break;
        case "esContribution":
            if(!isset($_GET["selector"]) || !isset($_GET["interval"])) {
                http_response("Necessary parameters not defined");
            } else {
                queryEsContribution($_GET["selector"], $_GET["interval"]);
            }
            break;
        default:
            http_response("Invalid data type");
    }
}

if ($_GET["ping"]) {
    http_response("pong");
}

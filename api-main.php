<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

if ($_GET["dataType"]) {
    $dataType = $_GET["dataType"];
    switch ($dataType) {
        case "topNWorst":
            if(!isset($_GET["selector"]) || !isset($_GET["measure"]) || !isset($_GET["count"]) || !isset($_GET["interval"])) {
                echo json_encode("Necessary parameters not defined");
            } else {
                queryTopNWorst($_GET["selector"], $_GET["measure"], $_GET["count"], $_GET["interval"]);
            }
            break;
        case "realTime":
            if(!isset($_GET["selector"]) || !isset($_GET["measure"]) || !isset($_GET["sourceID"]) || !isset($_GET["interval"])) {
                echo json_encode("Necessary parameters not defined");
            } else {
                queryRealTime($_GET["selector"], $_GET["measure"], $_GET["sourceID"], $_GET["interval"]);
            }
            break;
        case "esContribution":
            if(!isset($_GET["selector"]) || !isset($_GET["interval"])) {
                echo json_encode("Necessary parameters not defined");
            } else {
                queryEsContribution($_GET["selector"], $_GET["interval"]);
            }
            break;
        default:
            echo json_encode("Invaliod data type");
    }
}


function queryTopNWorst($selector, $measure, $count, $interval) {
    switch ($selector) {
        case "monitor":
            $data = array();
            for ($i = 0; $i < $count; $i++) {
                array_push($data, array("ID" => rand(0, 1000), "Data" => array($measure => rand(60, 100))));
            }
            break;
        case "task":
            $data = array();
            for ($i = 0; $i < $count; $i++) {
                array_push($data, array("ID" => rand(0, 1000), "Data" => array($measure => rand(60, 100))));
            }
            break;
        case "streams":
            $data = array();
            for ($i = 0; $i < $count; $i++) {
                array_push($data, array("ID" => rand(0, 1000), "Data" => array($measure => rand(60, 100))));
            }
            break;
        default:
            $data = "Invalid selector";
            break;
    }

    echo json_encode($data);
}

function queryRealTime($selector, $measure, $sourceID, $interval) {
    switch ($selector) {
        case "monitor":
            switch ($measure) {
                case "delay":
                    $data = array(
                        array("ID" => "10:30", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                        array("ID" => "10:35", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                        array("ID" => "10:40", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                        array("ID" => "10:45", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                        array("ID" => "10:50", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                        array("ID" => "10:55", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                        array("ID" => "11:00", "Data" => array("Near" => (rand(0, 1000)/200), "Far" => (rand(0, 1000)/200))),
                    );
                    break;
            }
            break;

        case "task":
            $data = array();
            break;
        case "streams":
            $data = array();
            break;
        default:
            $data = "Invalid selector";
            break;
    }

    echo json_encode($data);
}

function queryEsContribution($selector, $interval) {
    switch ($selector) {
        case "monitor":
            $data = array(
                array("ID" => "Monitor loss", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay variation", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "SES", "Data" => array("es" => rand(0, 1000)))
            );
            break;
        case "task":
            $data = array(
                array("ID" => "Task loss", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay variation", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "SES", "Data" => array("es" => rand(0, 1000)))
            );
            break;
        case "streams":
            $data = array(
                array("ID" => "Stream loss", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay variation", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "SES", "Data" => array("es" => rand(0, 1000)))
            );
            break;
        case "all":
            $data = array(
                array("ID" => "General loss", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "Delay variation", "Data" => array("es" => rand(0, 1000))),
                array("ID" => "SES", "Data" => array("es" => rand(0, 1000)))
            );
            break;
        default:
            $data = "Invalid selector";
            break;
    }


    echo json_encode($data);
}

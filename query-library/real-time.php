<?php

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
<?php

function queryRealTime($selector, $measure, $sourceID, $interval) {
    switch ($selector) {
        case "monitor":
            switch ($measure) {
                case "avg_response_time":
                    $data = array(
                        array("ID" => "10:30", "Data" => (rand(0, 1000)/200)),
                        array("ID" => "10:35", "Data" => (rand(0, 1000)/200)),
                        array("ID" => "10:40", "Data" => (rand(0, 1000)/200)),
                        array("ID" => "10:45", "Data" => (rand(0, 1000)/200)),
                        array("ID" => "10:50", "Data" => (rand(0, 1000)/200)),
                        array("ID" => "10:55", "Data" => (rand(0, 1000)/200)),
                        array("ID" => "11:00", "Data" => (rand(0, 1000)/200)),
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

    http_response($data);
}
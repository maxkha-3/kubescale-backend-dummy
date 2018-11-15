<?php

function queryTopNWorst($selector, $measure, $threshold, $interval) {
    switch ($selector) {
        case "monitor":
            $data = array();
            for ($i = 0; $i < $threshold; $i++) {
                array_push($data, array("ID" => rand(0, 1000), "Data" => array($measure => rand(60, 100))));
            }
            break;
        case "task":
            $data = array();
            for ($i = 0; $i < $threshold; $i++) {
                array_push($data, array("ID" => rand(0, 1000), "Data" => array($measure => rand(60, 100))));
            }
            break;
        case "streams":
            $data = array();
            for ($i = 0; $i < $threshold; $i++) {
                array_push($data, array("ID" => rand(0, 1000), "Data" => array($measure => rand(60, 100))));
            }
            break;
        default:
            $data = "Invalid selector";
            break;
    }

    http_response($data);
}
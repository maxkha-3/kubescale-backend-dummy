<?php

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


    http_response($data);
}
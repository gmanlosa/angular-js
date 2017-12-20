<?php

    $countries = [
        ["name" => "Austria"],
        ["name" => "Canada"]
    ];

    // json_encode returns the JSON representation of a value
    // echo json_encode($countries);

    $json = json_encode($countries);
    // json_decode parse JSON value
    var_dump(json_decode($json));


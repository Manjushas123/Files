<?php
$items = array(
    0 => array(
        0 => array(
            "available" => 1,
            "courier" => 1,
            "type" => 1,
            "price" => 42.89,
            "transitDays" => 3
        ),
        1 => array(
            "available" => 1,
            "courier" => 1,
            "type" => 3,
            "price" => 50.50,
            "transitDays" => 4
        ),
    ),
    1 => array(
        0 => array(
            "available" => 1,
            "courier" => 2,
            "type" => 1,
            "price" => 111,
            "transitDays" => 11
        ),
        1 => array(
            "available" => 0,
            "courier" => 2,
            "type" => 4,
            "price" => 22,
            "transitDays" => 22
        ),
    )
);
print_r($items);
?>
<?php

function map($arr, $fn) {
    $ret = array();
    foreach ($arr as $key => $val) {
        $ret[] = $fn($val, $key);
    }
    return $ret;
}

function reduce($arr, $fn, $init=0) {
    $acc = $init;
    foreach($arr as $key => $val) {
        $acc = $fn($acc, $val, $key);
    }
    return $acc;
}

function filter($arr, $fn) {}

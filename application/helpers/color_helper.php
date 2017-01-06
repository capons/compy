<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('define_color')) {
    function define_color($i)
    {
        $colors = array(
            0 => '#3f8586',
            1 => '#0098c0',
            2 => '#004c63',
            3 => '#b73148',
            4 => '#f8c137',
            5 => '#83355e',
            6 => '#3e3362',
            7 => '#f17605',
            8 => '#75c051',
            9 => '#ff9900',
            10 => '#9e253a',
            11 => '#405d9a',
            12 => '#81589f',
            13 => '#3eb5f1',
            14 => '#72c17c'
        );
        $k = $i % 14;

        //FOR RANDOM COLOR
        //$k = rand(0,14);
        return $colors[$k];
    }
}

if (! function_exists('get_colors')) {

    function get_colors() {
        $colors = array(
            0 => '#3f8586',
            1 => '#0098c0',
            2 => '#004c63',
            3 => '#b73148',
            4 => '#f8c137',
            5 => '#83355e',
            6 => '#3e3362',
            7 => '#f17605',
            8 => '#75c051',
            9 => '#ff9900',
            10 => '#9e253a',
            11 => '#405d9a',
            12 => '#81589f',
            13 => '#3eb5f1',
            14 => '#72c17c'
        );
        return $colors;
    }
}
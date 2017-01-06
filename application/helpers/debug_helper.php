<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('debug'))
{
    function debug($i) {
        header('Content-type: text/plain');
        print_R($i);
        die();
    }
}
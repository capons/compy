<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('build_alias')) {

    function build_alias($str) {
        $transform = array(
                                ' ' => '-', '^' => '-', '!' => '-',
                                '@' => '-', '#' => '-', '$' => '-',
                                '%' => '-', '&' => '-', '*' => '-',
                                '(' => '-', ')' => '-', '+' => '-',
                                '=' => '-', '?' => '-', '<' => '-',
                                '>' => '-', '/' => '-', '\\' => '-',
                                '|' => '-', '`' => '-', '[' => '-',
                                ']' => '-', '{' => '-', '}' => '-',
                                ';' => '-', ':' => '-', '.' => '-',
                                ',' => '-',
        );
        return strtr(trim(strtolower($str)),$transform);
    }
}
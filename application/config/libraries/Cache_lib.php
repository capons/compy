<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cache_lib {
    public function clear() {
        $CI =& get_instance();
        $CI->load->helper('file');
        delete_files('application/cache',FALSE,TRUE);
    }
}
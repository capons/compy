<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('template_url'))
{
    function template_url($folder='', $cp=0) {
        $site_url = get_instance()->config->site_url();
        if (!empty($folder))
        	$folder = $folder.'/';
        if ($cp == 0)
        	return $site_url.'templates/site/'.$folder;
        else
        	return $site_url.'templates/cp/'.$folder;
    }   
}
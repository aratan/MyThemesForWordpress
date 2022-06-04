<?php
/**
 * @package Básico
 * @version 0.1
 */
/*
Plugin Name: ar for Básic
Plugin URI: https://studio.emesal.org/
Description: PoC for theme Básico
Author: Victor Arbiol
Version: 0.1
Author URI: https://studio.emesal.org/
*/
/* [rs fb = "https://" tw="https://" ]  */

function frs($atts) {
    $args = shortcode_atts( array(
        'facebook' => 'http://www.facebook.com',
        'twitter'  => 'https://twitter.com/systemdevelope5',
        'youtube'  => 'https://t.co/1wgTkOajoY?amp=1'
        ), $atts );

    /* opciones*/
    $facebook = "<a href=".$args["facebook"].">Facebook</a>";
    $twitter  = "<a href=".$args["twitter"]." >> Twitter</a>";
    $youtube  = "<a href=".$args["youtube"]." >> Youtube</a>";
    
    $redes = $facebook . " " . $twitter . " " . $youtube ;

    return $redes;
}



add_shortcode("rs", "frs");

?>
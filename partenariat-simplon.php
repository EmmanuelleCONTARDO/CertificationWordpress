<?php
/*
Plugin Name: Zero plugin
Plugin URI: http://zero-plugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Midnight Falcon
Author URI: http://votre-site.com
License: GPL2
*/
add_shortcode('simplon', 'add_simplon') ;
function add_simplon() {
  return "<p style='color: black;'>La publication de cet article est possible grâce à mon super partenaire <a href='https://simplon.co'>simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web. </p>";

}
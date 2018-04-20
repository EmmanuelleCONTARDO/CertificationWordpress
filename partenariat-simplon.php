<?php
/*
Plugin Name: short code simplon
Plugin URI: http://zero-plugin.com
Description: Il s'agit d'un plugin Shortcode qui permet d'ajouter un texte n'importe où dans vos articles.
Quand le shortcode [simplon] est ajouté dans un article, le texte apparaît dans l’article , soit tout au début, soit vers la fin de l’article, soit quelque part dans l’article. 
Version: 0.1
Author: Emmanuelle Contardo
Author URI: http://votre-site.com
License: GPL2
*/
add_shortcode('simplon', 'add_simplon') ;
function add_simplon() {
  return "<p style='color: black;'>La publication de cet article est possible grâce à mon super partenaire <a href='https://simplon.co'>simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web. </p>";

}
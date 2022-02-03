<?php

/**
 * Plugin Name: Beaver Builder Hidden Class Toggle
 * Plugin URI: https://pyledigital.com
 * Description: Lightweight plugin that adds a Toggle button in the Beaver Builder header menu dropdown so you can toggle hidden class visablity inside the BB editor
 * Version: 1.0
 * Author: PYLE/DIGITAL
 * Author URI: https://pyledigital.com
 * License: GPL2

 */


if(! class_exists ( 'hidden_class_toggle'))
{

  class hidden_class_toggle{

    function __construct(){

      add_filter( 'wp_enqueue_scripts' , array($this,'hidden_class_toggle_scripts'), 20 , 2 );
      
      // Add BB shortcut
      add_filter( 'fl_builder_keyboard_shortcuts', function( $shortcuts ) {
        $shortcuts['hiddenClassToggle'] = array(
          'label' => __( 'Toggle Hidden Class Visability', 'hiddenClassToggle'),
          'keyCode' => 'mod+='
          );
        return $shortcuts;
      });

    }

    function hidden_class_toggle_scripts(){
        if(class_exists('FLBuilderModel') && FLBuilderModel::is_builder_active()){
          wp_enqueue_script( 'hidden_class_toggle_scripts', plugin_dir_url( __FILE__ ) . 'js/hidden-class-toggle.js', array('jquery') );
          wp_enqueue_style( 'hidden_class_toggle_styles', plugin_dir_url( __FILE__ ) . 'css/hidden-class-toggle.css' );
        }
      }
  }
  $hct = new hidden_class_toggle();
}

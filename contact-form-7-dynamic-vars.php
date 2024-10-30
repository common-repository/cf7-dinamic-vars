<?php

/*
Plugin Name: Contact Form 7 - Dinamic Vars
Plugin URI: https://profiles.wordpress.org/albertdesinger
Description:  Inserting dynamic variables into text fields, buttons, or just a text tag
Version: 1.1
Author: albertdesinger
Author URI: 
License: GPL2
*/

add_action( 'plugins_loaded', 'wpcf7dv_init' , 20 );
function wpcf7dv_init(){
    if(isset($_GET['wpcf7'])){
	}else{
        add_action( 'wpcf7_init', 'wpcf7dv_add_shortcode_dynamicvars' );
        add_filter( 'wpcf7_form_tag', 'filter_wpcf7dv_form_tag', 10, 2 ); 
    }
}


function filter_wpcf7dv_form_tag( $scanned_tag, $this_exec ) { 
  //  if($scanned_tag['type']!='dinamic_vars'){
        // make filter magic happen here...
        if(isset($scanned_tag['values'][0])){
            $wpcf7dv_shortcode = explode('dinamic_shortcode:',$scanned_tag['values'][0]);
            //dinamic vars items
            if(count($wpcf7dv_shortcode)>1){
                $wpcf7dv_shortcode_val = do_shortcode('['.$wpcf7dv_shortcode[1].']');
                $scanned_tag['raw_values'][0] = $wpcf7dv_shortcode_val;
                $scanned_tag['values'][0] = $wpcf7dv_shortcode_val;
                $scanned_tag['before'][0] = $wpcf7dv_shortcode_val;
                $scanned_tag['after'][0] = $wpcf7dv_shortcode_val;
                $scanned_tag['labels'][0] = $wpcf7dv_shortcode_val;
           }else{
                $wpcf7dv_function = explode('dinamic_function:',$scanned_tag['values'][0]);
                if(count($wpcf7dv_function)>1){
                    $wpcf7dv_function_val = call_user_func("".$wpcf7dv_function[1]."");
                    $scanned_tag['raw_values'][0] = $wpcf7dv_function_val;
                    $scanned_tag['values'][0] = $wpcf7dv_function_val;
                    $scanned_tag['before'][0] = $wpcf7dv_function_val;
                    $scanned_tag['after'][0] = $wpcf7dv_function_val;
                    $scanned_tag['labels'][0] = $wpcf7dv_function_val;
                }else{
                    $wpcf7dv_var = explode('dinamic_var:',$scanned_tag['values'][0]);
                     if(count($wpcf7dv_var)>1){
                        $wpcf7dv_var_val = $wpcf7dv_var[1];
                        $data =  (string)$wpcf7dv_var_val;
                        if(isset($GLOBALS[$data])){
                            $scanned_tag['raw_values'][0] = $GLOBALS[$data];
                            $scanned_tag['values'][0] = $GLOBALS[$data];
                            $scanned_tag['before'][0] = $GLOBALS[$data];
                            $scanned_tag['after'][0] = $GLOBALS[$data];
                            $scanned_tag['labels'][0] = $GLOBALS[$data];
                        }
                    }

                }//closed if dinamic function
           }//closed else shortcode
        }

    //}

    return $scanned_tag; 
}; 
         

function wpcf7_dinamic_vars($atts){
    extract(shortcode_atts(array(
        'short' => '',
    ), $atts));
	ob_start();
	$datashort =  do_shortcode('['.$atts['labels'][0].']');
    $datashort = str_replace('[','',$datashort);
    $datashort = str_replace(']','',$datashort);
    echo $datashort;	
    return ob_get_clean();
}

function wpcf7dv_add_shortcode_dynamicvars() {
	wpcf7_add_form_tag('dinamic_vars','wpcf7_dinamic_vars');
}






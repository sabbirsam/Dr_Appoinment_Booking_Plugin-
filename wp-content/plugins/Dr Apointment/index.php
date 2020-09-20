<?php 

/*  
    Plugin Name: Dr. Appointment Booking
    Plugin URI: https://google.com
    Description: I have work experience in both computer,software, graphic design and networking language that will help to utilize my knowledge in your organization and full-fill organizational goal.
    Version: 1.0
    Author: sabbir ahmed
    Author URI: http://facebook.com
*/


add_action('admin_menu','custom_function1');


function custom_function1(){
    add_menu_page(
                    'page_title',  //page title
                    'Appoinment', //menu Title
                    'manage_options', //capability
                    'custom-plugin', //menu slug
                    'custom_function2',  //callable funcction here 

    );

};
function custom_function2(){
    include_once('user.php');     //this will call user regis. form
    DBP_insert_data('display.php');

};


// from here search option
add_action('admin_menu','custom_search');


function custom_search(){
    add_menu_page(
                    'page_titles',  //page title
                    'Search', //menu Title
                    'manage_options', //capability
                    'custom-plugin2', //menu slug
                    'custom_function3',  //callable funcction here 
                    'dashicons-search',

    );

};

function custom_function3(){
    include_once('search.php'); 

};


// end 




//bellow part for show data from table
function AdminPage() {



    include_once('display.php');     //this will call user regis. form
    // DBP_insert_data();
    //it used to call that user function user() from user.php
   
   
}


// her--------------------------------------------------------------------------e

register_activation_hook(__FILE__, 'createPluginActivation'); 


function createPluginActivation(){

    global $wpdb; 

    $charset_collate = $wpdb->get_charset_collate(); 

    $table_name = $wpdb->prefix.'members_registration'; 
 

    $sql = "CREATE TABLE `$table_name` (
        `user_id` int(11) NOT NULL AUTO_INCREMENT, 
        `patient_name` varchar(220) DEFAULT NULL, 
        `patient_phone` varchar(220) DEFAULT NULL, 
        `patient_email` varchar(220) DEFAULT NULL, 
        `address` varchar(220) DEFAULT NULL,
        `doctor` varchar(220) DEFAULT NULL, 
        `type_of_disease` varchar(220) DEFAULT NULL, 
        `date` DATE DEFAULT NULL,
        PRIMARY KEY(user_id)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1; 
    "; 





    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name){

        require_once(ABSPATH.'wp-admin/includes/upgrade.php'); 
        dbDelta($sql);
    
    }
}
    add_action('admin_menu', 'addAdminMenu'); 

    function addAdminMenu(){
        add_menu_page('Dr Appoinment Form Page','Dr Appoinment Form Menu', 'manage_options', __FILE__, 'AdminPage', 'dashicons-admin-multisite' ); 
    }




// from here css are link code 
add_action('admin_enqueue_scripts', 'reg_stylesheets'); 
// wp_enqueue_style();


//it is calable function what mainly used for register the css
function reg_stylesheets(){
    wp_enqueue_style('cover_stylesheet',plugins_url('css/style.css',__FILE__));   //1st css link with custome name cover_stylesheet
    wp_enqueue_style('cover_stylesheet2',plugins_url('style2.css',__FILE__));//2nd css link with custome name cover_stylesheet
}




// from here JS or JQuery are link code 
add_action('admin_enqueue_scripts', 'reg_script');




//now here is register js
function reg_script(){
    wp_enqueue_script('js_jquery_file',plugins_url('sa.js',__FILE__));
    wp_enqueue_script('js_jquery_file',plugins_url('js/sas.js',__FILE__));
    
}
?>
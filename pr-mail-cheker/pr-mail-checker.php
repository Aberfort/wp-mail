<?php
/**
 * Plugin Name: Mail checker
 * Description: Periodically checking the work of the WP mail SMTP plugin, which creates a cron job, which, in case of an error, should send a message to the Slackbot.
 * Author:      Vasyliev Serhii
 * Version:     1.0.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// TODO автозагрузка классов

define( 'ET_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

spl_autoload_register( function ( $class ) {
  $fn = 'inc/class/' . $class . '.php';
  include $fn;
} );

$to = 's.vasilyev12@gmail.com';
$domain = 'https://' . $_SERVER['HTTP_HOST'];
$subj = 'Your email was not send!';
$domain_msg = 'your email was not send!';

$sa_email_test = new Sa_email_test($to,$subj,$domain,$domain_msg);
$sa_email_test->init();
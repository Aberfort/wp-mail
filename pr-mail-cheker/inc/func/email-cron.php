<?php
/**
 * The plugin's cron class
 *
 */

if ( ! wp_next_scheduled( 'cron_mail_test' ) ) {

  wp_schedule_event( time(), 'hourly', 'cron_mail_test' );

}

add_action( 'cron_mail_test', 'cron_mail_fire' );

function cron_mail_fire() {
  $var = new SA_Email_Test();
  $var->email_test();
}

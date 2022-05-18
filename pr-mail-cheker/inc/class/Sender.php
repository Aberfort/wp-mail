<?php
// TODO namespace ?

// TODO название файла нужно изменить

class Sender {
	public static function send( $message ) {
		$url = "https://hooks.slack.com/services/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";

		$curl = curl_init( $url );
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_POST, true );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

		$headers = array(
			"Content-type: application/json",
		);
		curl_setopt( $curl, CURLOPT_HTTPHEADER, $headers );

		$data = "{'text':'$message'}";

		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );

		//for debug only!
		curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );

		$resp = curl_exec( $curl );
		curl_close( $curl );
	}
}

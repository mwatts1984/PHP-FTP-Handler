<?php

class FTP_Handler {

	// The connection settings that we will be using.
	protected $connectionSettings;

	public function __construct( $hostname, $username, $password, $workingDirectory ) {

		$this->connectionSettings = array (
			
		"hostname" 				=> $hostname, 
		"username" 				=> $username, 
		"password" 				=> $password,
		"workingDirectory" 		=> $workingDirectory,
		"stream" 				=> ftp_connect($hostname),
		"result" 				=> ftp_login(ftp_connect($hostname), $username, $password) );

	}

	public function __destruct(){

	}
}
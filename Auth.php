<?php
	class Auth
	{
	public static $username = 'Bearlion';
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	public static function attempt($username, $password)
	{
		if(password_verify($password, self:: $password) && ($username == self:: $username)) {
			return $_SESSION['LOGGED_IN_USER'] = $username;
		} else {
			return "User {$username} failed to log in!";
		}
	}
	public static function check()
	{
		return (isset($_SESSION['LOGGED_IN_USER']));
	}
	public static function user()
	{
		return $_SESSION['LOGGED_IN_USER'];
	}
	public static function logout()
	{
		  // clear $_SESSION array
	    session_unset();
	    // delete session data on the server
	    session_destroy();
	    // ensure client is sent a new session cookie
	    session_regenerate_id();
	    // start a new session - session_destroy() ended our previous session so
	    // if we want to store any new data in $_SESSION we must start a new one
	   
	}
	}

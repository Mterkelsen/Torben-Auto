<?php
	
	session_start();
	
	
	function logged_in() {
		return isset($_SESSION['user_id']);
	}
	
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("medlemslogin.php");
		}
	}

	function admin_logged_in(){
		return isset($_SESSION['admin_id']);

	}


	function confirm_admin_logged_in(){
		if(!admin_logged_in()){
			redirect_to("admin.php");
		}
	}
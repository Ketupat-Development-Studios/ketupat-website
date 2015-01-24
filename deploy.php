<?

	
	if ( !empty($_POST['payload'])) {
  		// Only respond to POST requests from Github
		//echo exec("whoami", $abc);
		echo exec("sudo -u huey git pull origin master 2>&1", $abc);
		var_dump($abc);
	}	

?>

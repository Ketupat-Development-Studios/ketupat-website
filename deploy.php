<?

	echo shell_exec("exec ssh-agent bash && ssh-add /home/huey/.ssh/ketupat-deploy && git pull origin master 2>&1");

?>

<?php
	include "include/config.php"	

	if (isset($_GET['key']) AND $_GET['key'] == _DEPLOY_KEY_)
	{
		// Used to deply from guithub on a Webhook (push)
		file_put_contents("../deploy.now", "deploy now!", FILE_APPEND | LOCK_EX);
	}
?>
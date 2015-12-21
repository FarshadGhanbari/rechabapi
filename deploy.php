<?php
	// Used to deply from guithub on a Webhook (push)
	file_put_contents("../deploy.now", "deploy now!", FILE_APPEND | LOCK_EX);
?>
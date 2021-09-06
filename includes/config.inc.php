<?php

$live = false;

$contact_email = 'nrukbat@gmal.com';

$path = $_SERVER['DOCUMENT_ROOT'];

define('BASE_URI', $path . '/ecomm-knowledge');
define('BASE_URL', 'localhost/lab/ecomm-knowledge');
define('MYSQL', $path . '/lab/ecomm-knowledge/includes/mysql.inc.php');

session_start();

function my_error_handler ( $e_number, $e_message, $e_file, $e_line, $e_vars) {
	global $live, $contact_email;

	$message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";
	$message .= "<pre>". print_r(debug_backtrace(), 1) ."</pre>\n";

	if (!$live) {
		echo '<div class="error">'. nl2br($message) .'</div>';
	} else {
		error_log($message, 1, $contact_email, 'From:admin@example.com');

		if ($e_number != E_NOTICE) {
			echo '<div class="error">A system error ocurred. We apologize for the inconvenience.</div>';
		}
	}

	return true;

}

set_error_handler('my_error_handler');


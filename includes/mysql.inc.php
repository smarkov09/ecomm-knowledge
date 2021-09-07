<?
/* db connection */

/* define constants */
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'mysql');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ecomm1');

/* connect to the db */
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* establish the character set */
mysqli_set_charset($dbc, 'utf8');

/* function for making data safe to use in queries */
function escape_data ($data, $dbc) {
	global $dbc;

	if ( get_magic_quotes_gpc() ) $data = stripslashes( $data );

	return mysqli_real_escape_string ( $dbc, trim ($data) );
}


/* password handling */
function get_password_hash($password) {
	global $dbc;

	return mysqli_real_escape_string($dbc, hash_hmac('sha256', $password, 'c#haRl891', true));
}


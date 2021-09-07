<?php

// This script displays the login form.
// This script is included by header.html, if the user isn't logged in.
// This script is created in Chapter 4.

// Create an empty error array if it doesn't already exist:
if (!isset($login_errors)) $login_errors = array();

// Need the form functions script, which defines create_form_input():
require_once('./includes/form_functions.inc.php');
?>

<div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-white bg-primary">Login</div>
              <div class="card-body">
                <form action="index.php" method="post" accept-charset="utf-8">
                  <div class="mb-3">
                  	<?php
                  		if (array_key_exists('login', $login_errors)) {
							echo '<div class="alert alert-danger">' . $login_errors['login'] . '</div>';
						}
						create_form_input('email', 'email', '', $login_errors, array('placeholder'=>'Email address')); 
						create_form_input('pass', 'password', '', $login_errors, array('placeholder'=>'Password')); 
						//echo '<span class="help-block"><a href="forgot_password.php">Forgot?</a></span>';
                  	?>
                  </div>
                  <div class="mb-3">
                    <a class="class" href="forgot_password.php">Forgot password?</a>
                  </div>
                  <button type="submit" class="btn btn-primary">Login &rarr;</button>
                </form>
              </div>
            </div>

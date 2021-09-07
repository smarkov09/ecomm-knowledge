<?php
require('./includes/config.inc.php');

// to test the sidebars
//$_SESSION['user_id'] = null;
//$_SESSION['user_type'] = 'member';

require(MYSQL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include ('./includes/login.inc.php');
}

include('./includes/header.html');
?>


<h1>Welcome to the home page</h1>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
<hr>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

</div>
          <!-- main content -->

<?php
include('./includes/footer.html');
?>
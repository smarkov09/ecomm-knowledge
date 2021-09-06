<?php
require('./includes/config.inc.php');
include('./includes/header.html');
require(MYSQL);
?>

<h1>Welcome to the home page</h1>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
<hr>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

</div>
          <!-- main content -->

<?php
include('./includes/footer.html');
$_SESSION['user_id'] = 1;
$_SESSION['user_type'] = 'admin';
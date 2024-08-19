 <?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
if ($page == 'login') {
  include "auth/login.php";
} elseif ($page == 'register') {
  include "auth/register.php";
} 
?>

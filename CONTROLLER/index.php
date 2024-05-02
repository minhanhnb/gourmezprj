
  <?php
   include("../VIEW/Pages/header.php")
   ?>

   <?php 
   if(isset($_GET['quanly']))
   { 
    switch($_GET['quanly'])
    {
      case 'thucdon':
        include ('../VIEW/Pages/thucdon.php');
        break;
      default :
      include ('../VIEW/Pages/home.php');
      break;
    }
  }
  else 
  {
    include ('../VIEW/Pages/home.php');
  }
?>
<?php 
include ('../VIEW/Pages/footer.php');
?>

// ĐÂY CHÍNH LÀ CONTROLLER
<?php
   session_start();
   ob_start();
   include "../MODEL/connectdb.php";
   include "../MODEL/danhmuc.php";
   include("../ADMIN/VIEW/Pages/header.php");
?>
<?php
 include("../ADMIN/VIEW/Pages/sidebar.php");
 ?>
    <?php 
   if(isset($_GET['act']))
   { 
    switch($_GET['act'])
    {

      case 'danhmuc':
        //Lấy danh sách danh mục 
        $kq=getall_category();
        include ('../ADMIN/VIEW/Pages/danhmuc.php');
        break;    
    case 'delcategory':
        if(isset($_GET['id_category']))
        {
            $id=$_GET['id_category'];
            delcategory($id);
        }
        $kq=getall_category();
        include ('../ADMIN/VIEW/Pages/danhmuc.php');

  }
}
  else 
  {
    include ('../ADMIN/VIEW/Pages/home.php');
  }
?>
<?php 
include ('../VIEW/Pages/footer.php');
?>
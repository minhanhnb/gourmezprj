
<?php
   session_start();
   ob_start();
   include "../MODEL/connectdb.php";
   connectdb();
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
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            delcategory($id);
        }
        $kq=getall_category();
        include ('../ADMIN/VIEW/Pages/danhmuc.php');
        break;
        
        case 'updatecategory':
            //Lấy 1 record đúng với id truyền vào 
            if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $kqone=getonecategory($id);
            
            $kq=getall_category();
            include ('../ADMIN/VIEW/Pages/updatedanhmuc.php');
        }
        if(isset($_POST['id']))
        {
            $id=$_POST['id'];
            $catename=$_POST['categoryname'];
            updatecategory($id,$catename);
            $kq=getall_category();
            include ('../ADMIN/VIEW/Pages/danhmuc.php');
        }
           break;   
            case 'addcategory':
              if(isset($_POST['themmoi'])&&($_POST['themmoi']))
              {
                $catename=$_POST['namecategory'];
                addcategory($catename);
              }
              //Lấy danh sách danh mục 
              $kq=getall_category();
              include ('../ADMIN/VIEW/Pages/danhmuc.php');
              break; 



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
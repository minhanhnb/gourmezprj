

<div class="main">
    <h2> Danh mục </h2>
    <form action="" method="POST">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
</form>

<br>
<table>
    <tr>
        <th> STT</th> 
        <th> Tên danh mục</th>
        <th> Ưu tiên</th> 
        <th> Hành động</th> 
</tr> 
<?php 
//var_dump($kq);
// check trong mảng đã có dữ liệu chưa
if (isset($kq)&&(count($kq)>1))
{
    $i =1;
    foreach ($kq as $cate)
    {
        echo '<tr>
            <td>'.$i.' </td> 
            <td>'.$cate['category_name'].' </td>
            <td> '.$cate['number'].'</td> 
            <td><a href="index.php?act=updatecategory&id='.$cate['id_category'].'"> Sửa</a> | <a href="index.php?act=delcategory&id='.$cate['id_category'].'"> Xóa</a>  </td> 
                </tr>  ';
        $i++;
    }
}
?>


</table>
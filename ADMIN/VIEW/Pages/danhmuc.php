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
            <td> </td>
            <td> </td> 
            <td><a href="#"> Sửa</a> | <a href="#"> Xóa</a>  </td> 
                </tr>  '
    }
}
?>


</table>
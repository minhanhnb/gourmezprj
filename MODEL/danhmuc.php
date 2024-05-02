<?php
function delcategory($id) {

}
function getall_category()
{
    $conn=connectdb();

    $stmt = $conn->prepare("SELECT * FROM tbl_category");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();

    return $kq;
}
?>

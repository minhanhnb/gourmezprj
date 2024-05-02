<?php
function delcategory($id) {
    $conn= connectdb();
    $sql = "DELETE FROM tbl_category WHERE id_category=".$id;
    $conn->exec($sql);

}
function getall_category()
{
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_category");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
    // mảng nhiều phần tử
}

function getonecategory($id) {
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_category WHERE id_category=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
    // mảng một phần tử

}

function updatecategory($id, $catename)
{
    $conn=connectdb();
    $sql = "UPDATE tbl_category SET category_name = :catename WHERE id_category = :id";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    // Bind parameters
    $stmt->bindParam(':catename', $catename);
    $stmt->bindParam(':id', $id);
    // Execute the query
    $stmt->execute();
}

?>

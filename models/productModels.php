<?php
function getProductModel($start, $per_page)
{
    // $sql = "SELECT user.* ,product.nameProduct as product FROM user JOIN product on user.id = product.id_user";

    $sql = "SELECT * FROM product ORDER BY id LIMIT $start,$per_page";
    return getAll($sql, true);
}

function removeProduct($id)
{
    $sql = "DELETE FROM product WHERE id = $id";
    excute($sql);
}

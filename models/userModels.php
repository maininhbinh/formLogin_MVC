<?php

function getUserModel($start, $per_page)
{
    // $sql = "SELECT user.* ,product.nameProduct as product FROM user JOIN product on user.id = product.id_user";

    $sql = "SELECT * FROM user ORDER BY id LIMIT $start,$per_page";
    return getAll($sql, true);
}

function remove($id)
{
    $sql = "DELETE FROM user WHERE id = $id";
    excute($sql);
}

function addUser($name, $email, $password, $name_avatar)
{
    $sql = "INSERT INTO user VALUES (null,'$name', '$email', '$password','$name_avatar')";
    return excute($sql);
}

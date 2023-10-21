
<?php
const HOST_NAME = '127.0.0.1';
const DB_NAME = 'form_login';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_CHARSET = 'utf8';
const DB_URL = 'http://fromlogin.pro';
const LINK_BOOTSTRAP = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>';


function checkRegister($name, $email, $password)
{
    $errors = [];

    if (checkNull($name)) {
        $errors['name'] = checkNull($name);
    }
    if (checkNull($email)) {
        $errors['email'] = checkNull($email);
    }
    if (checkNull($password)) {
        $errors['password'] = checkNull($password);
    }

    return $errors;
}

function checkNull($i)
{
    $errors = '';
    if ($i == '') {
        $errors = 'không được bỏ trống trường này';
    }

    return $errors;
}

function view($path, $data = [])
{
    require_once("./views/$path.php");
}

function countPage()
{
    $sql = "SELECT * FROM user";

    $connect = getConnect();
    $data = $connect->prepare($sql);
    $data->execute();

    $count = $data->fetchAll(PDO::FETCH_ASSOC);

    $page = count($count);

    return $page;
}

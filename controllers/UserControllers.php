<?php
require_once('models/userModels.php');
function getUser()
{
    $per_page = 3;
    $page = 1;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $start = ($page - 1) * $per_page;
    echo    $start;
    $max_page = ceil(countPage() / $per_page);

    $user = getUserModel($start, $per_page);
    require_once('./views/listUser.php');
}

function postUser()
{
    if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $premiter_extension = ['png', 'jpg', 'jpeg', 'pdf'];
        $file_name = $_FILES['avatar']['name'];
        $url = "./public/upload/images/";
        $name_avatar = '';

        if (!empty($file_name)) {
            $file_tmp_name = $_FILES['avatar']['tmp_name'];
            $name_avatar = time() . "-" . $file_name;
            $path = $url . $name_avatar;
            $file_extension = explode(".", $file_name);
            $file_extension = strtolower(end($file_extension));

            if (in_array($file_extension, $premiter_extension)) {
                move_uploaded_file($file_tmp_name, $path);
            }
        } else {
            $name_avatar = 'user.jpg';
        }

        $errors = checkRegister($name, $email, $password);

        if (!$errors) {

            addUser($name, $email, $password, $name_avatar);
            header('location:' . DB_URL);
            die;
        } else {
            view('dangKi', $errors);
        }
    } else {
        echo 'dữ liệu chưa được đẩy đi';
    }
}

function deleteUser()
{
    $id = $_GET['id'];
    $user = remove($id);

    header("location:" . DB_URL);
    die;
}

function login()
{
}

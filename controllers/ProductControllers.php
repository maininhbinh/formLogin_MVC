<?php
require_once "./models/productModels.php";
function getProduct()
{
    $per_page = 3;
    $page = 1;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $start = ($page - 1) * $per_page;
    echo    $start;
    $max_page = ceil(countPage() / $per_page);

    $product = getProductModel($start, $per_page);
    require_once('./views/listProduct.php');
}

function deleteProduct()
{
    $id = $_GET['id'];
    $user = removeProduct($id);

    header("location:" . DB_URL);
    die;
}

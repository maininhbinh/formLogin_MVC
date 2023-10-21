<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <?= LINK_BOOTSTRAP ?>
</head>

<body>
    <table border="1px" class="table">
        <thead>
            <tr style="text-align:center;">
                <th>
                    id
                </th>
                <th>
                    tên sản phẩm
                </th>
                <th>
                    liên kết với user
                </th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $i) {
                extract($i);
            ?>
                <tr style="text-align:center;">
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $nameProduct ?>
                    </td>
                    <td>
                        <?= $id_user ?>
                    </td>
                    <td style="text-align:center;">
                        <button style="display: inline;" class="btn btn-outline-danger">
                            <a href="?url=delete-product&id=<?= $id ?>">delete</a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/">Previous</a></li>
            <?php for ($i = 1; $i <= $max_page; $i++) { ?>
                <li class="page-item"><a class="page-link" href="?url=product&page=<?= $i ?>"><?= $i ?></a></li>
            <?php } ?>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    <a href="?url=add-user"><button class="btn btn-outline-primary">add</button></a>
</body>


</html>
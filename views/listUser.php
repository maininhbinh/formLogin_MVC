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
                    email
                </th>
                <th>
                    tài khoản
                </th>
                <th>
                    password
                </th>
                <th>
                    avartar
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $i) {
                extract($i);
            ?>
                <tr style="text-align:center;">
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <td>
                        <?= $email ?>
                    </td>
                    <td>
                        <?= $password ?>
                    </td>
                    <td>
                        <img src="./public/upload/images/<?= $avatar ?>" alt="" class="img-fluid rounded-5" style="width: 50px; ">
                    </td>
                    <td style="text-align:center;">
                        <button style="display: inline;" class="btn btn-outline-danger">
                            <a href="?url=delete-user&id=<?= $id ?>">delete</a>
                        </button>
                        <button style="display: inline;" class="btn btn-outline-primary">
                            <a href="?url=update-user">update</a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <?php for ($i = 1; $i <= $max_page; $i++) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
            <?php } ?>
            <li class="page-item"><a class="page-link" href="?url=product">Next</a></li>
        </ul>
    </nav>
    <a href="?url=add-user"><button class="btn btn-outline-primary">add</button></a>
</body>


</html>
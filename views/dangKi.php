<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= LINK_BOOTSTRAP ?>
    <style>
        form {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">đăng kí</h1>
    <form action="<?= DB_URL ?>?url=AddController" method="post" enctype="multipart/form-data" class="py-5">
        <div>
        </div>
        <div>
            <input type="text" name="name" id="" class="form-control" value="<?= $_POST['name'] ?? '' ?>">
            <label for="name">Họ và tên</label>
            <div class="text-danger">
                <?= $data['name'] ?? '' ?>
            </div>
        </div>
        <div>
            <input type="text" name="email" class="form-control" value="<?= $_POST['email'] ?? '' ?>">
            <label for="email">Email</label>
            <div class="text-danger">
                <?= $data['email'] ?? '' ?>
            </div>
        </div>
        <div>
            <input type="password" name="password" id="" class="form-control" value="<?= $_POST['password'] ?? '' ?>">
            <label for="password">Password</label>
            <div class=" text-danger">
                <?= $data['password'] ?? '' ?>
            </div>
        </div>
        <div>
            <input type="file" name="avatar" id="" class="form-control">
        </div>
        <input type="submit" value="add" name="submit" class="btn btn-outline-primary my-3 ">
    </form>
</body>

</html>
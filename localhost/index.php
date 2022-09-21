<?
require_once("fun/connect.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<body>
    <div class="wrapper">



        <div class="user">
            <?php foreach ($result as $row) : ?>

                <p><?= $row['name'] ?></p>
                <p><?= $row['email'] ?></p>
                <p><?= $row['phone'] ?></p>
                
                <div class="aaa">
                    <form action="fun/delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit">x</button>
                    </form>
                </div>
            <?php endforeach ?>


        </div>

        <div class="update_user">
            <form action="fun/update.php" method="$_POST">
                <input type="name" name="name" placeholder="name">
                <input type="email" name="email" placeholder="email">
                <input type="number" name="phone" placeholder="phone">
                <button type="submit">Сохранить</button>
            </form>
        </div>
        <div class="add_user">
            <form action="fun/add.php" method="$_POST">
                <input type="name" name="name" placeholder="name">
                <input type="email" name="email" placeholder="email">
                <input type="number" name="phone" placeholder="phone">
                <button type="submit">Добавить</button>
            </form>
        </div>
    </div>

</body>

</html>
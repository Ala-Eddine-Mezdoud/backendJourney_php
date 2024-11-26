<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- we use the dot for concatinationg -->
    <h1>hello my name  <?php echo "goes by" . " " . $name ?></h1>

    <table border=1>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Pages</th>
        </tr>
        <?php foreach($books as $book){ ?>
            <tr>
                <td> <?= $book['title'] ?>   </td>
                <td> <?= $book['genre'] ?>   </td>
                <td> <?= $book['price'] ?>   </td>
                <td> <?= $book['pages'] ?>   </td>
            </tr>
       <?php }?>

    </table>
    <br>
    <table border=1>
        <tr>
            <th>username</th>
            <th>email</th>
        </tr>
        <?php foreach($users as $user){ ?>
            <tr>
                <td> <?= $user['username'] ?>   </td>
                <td> <?= $user['email'] ?>   </td>
            </tr>
       <?php }?>

    </table>

</body>
</html>
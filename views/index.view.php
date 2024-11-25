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
    <br>

    <?php 
    $myarray = [1,2,3,4,5,6,7,8,9];
    function test($value){
        return $value > 3;
    }

    $filteredArray = array_filter($myarray, 'test');
    print_r($filteredArray);
    
    ?>

</body>
</html>
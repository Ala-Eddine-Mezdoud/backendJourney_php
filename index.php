<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = 'Mezdoud Ala Eddine';
    ?>
    <!-- we use the dot for concatinationg -->
    <h1>hello my name  <?php echo "goes by" . " " . $name ?></h1>

    <?php 
    
    $books = [
        ["title" => "I missed a prayer",
         "genre" => "religion",
         "price" => "12$",
         "pages" => 445
    ],
        ["title" => "antikhristos",
         "genre" => "world",
         "price" => "11$",
         "pages" => 362
],
        ["title" => "the subtle art of not giving a fuck",
         "genre" => "selfe improvement",
         "price" => "13$",
         "pages" => 260
        ]

    ];
    ?>

    <table border=1>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Pages</th>
        </tr>
        <?php 
        foreach($books as $book){
            echo "<tr>";
                echo "<td>" . "$book[title]" . "</td>";
                echo "<td>" . "$book[genre]" . "</td>";
                echo "<td>" . "$book[price]" . "</td>";
                echo "<td>" . "$book[pages]" . "</td>";
            echo "</tr>";
        }

        ?>

    </table>

</body>
</html>
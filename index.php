<?php

$name = 'Mezdoud Ala Eddine';


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


$dsn = 'mysql:host=localhost;dbname=demo;user=root;password=admin';

try {
    $db = new PDO($dsn);
}
catch (PDOexception $e){
    echo $e;
}

# inserting data into users table:

// $stmt = $db->prepare("INSERT INTO users(username,email,password) VALUES(:name,:email,:password)");
// $stmt->bindParam(':name',$username);
// $stmt->bindParam(':email',$email);
// $stmt->bindParam(':password',$password);

// $username = 'alaeddine';
// $email = 'alaeddine@gmail.com';
// $password = 'loulou123456';

// $stmt->execute();

# fetching data from users table

$stmt = $db->query("SELECT username,email FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $user){
    echo "username: " . $user['username'] . "<br>";
    echo  "email: " . $user['email'];
    echo "<br> <br> <br>";
}

// require("index.view.php");
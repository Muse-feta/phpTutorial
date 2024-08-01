<?php
// echo "connection";

$link = mysqli_connect("localhost", "phpdemo", "phpdemo", "phpdemo");
if($link === false){
    die("Error: could not connect." . mysqli_connect_error());
}else{
    echo "connected!";
};

$sql = "CREATE TABLE IF NOT EXISTS contact(
id INT  AUTO_INCREMENT NOT NULL PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
messages VARCHAR(1000) NOT NULL
)";

if($link->query($sql) === true){
    echo "Table created successfully";
}else{
    echo "Error creating table: " . $link->error;
};
?>
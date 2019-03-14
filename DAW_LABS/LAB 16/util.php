<?php
function connectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbname";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if(!$con)
        die("Connection failed: " . mysqli_connect_error());
    
    return $con;
}
function closeDb($mysql){
    mysqli_close($mysql);
}
function getFruits(){
    $conn = connectDb();
    $sql = "SELECT id, name, units, quantity, price, country FROM Fruit";
    $result = mysqli_query($conn, $sql);
    closeDb($conn);
    return $result;
}
function getFruitsByCountry($fruit_country){
    $conn = connectDb();
    $sql = "SELECT id, name, units, quantity, price, country FROM Fruit WHERE country <= '".$fruit_country."'";
    $result = mysqli_query($conn, $sql);
    closeDb($conn);
    return $result;
}
function getFruitsByName($fruit_name){
    $conn = connectDb();
    $sql = "SELECT id, name, units, quantity, price, country FROM Fruit WHERE name <= '".$fruit_name."'";
    $result = mysqli_query($conn, $sql);
    closeDb($conn);
    return $result;
}
?>
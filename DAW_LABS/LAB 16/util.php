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

function insertFruit($id, $name, $units, $quantity, $price, $country){
    
    $conn = conectDb();
    
    $sql = "INSERT INTO Fruit(id,name,units,quantity,price,country) VALUES(?,?,?,?,?,?)"; 
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $units = mysqli_real_escape_string($conn, $_POST['units']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    
    if(!($statement->bind_param("ssssss",$id,$name,$units,$quanity,$price,$country))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }   
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    else
    {
        $result=true;
    }
    
    $statement->close();
    
    $result = true;
    
    closeDb($conn);
}

function deleteByName($name){
    $conn = conectDb();
    
    $sql = "DELETE FROM Fruit WHERE name =?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    if(!($statement->bind_param("s",$name))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }   
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    else
    {
        $result=true;
    }
    
    $statement->close();
    
    closeDb($conn);

    return $result;
    
}

function updateByName($id, $name, $units, $quantity, $price, $country){
    $conn = conectDb();
    
    $sql = "UPDATE Fruit SET id=?,name=?,units=?,quantity=?,price=?,country=? WHERE id=?";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $units = mysqli_real_escape_string($conn, $_POST['units']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    
    if(!($statement->bind_param("sssssss",$id,$name,$units,$quanity,$price,$country,$id))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }   
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    
    else
    {
        $result=true;
    }
    
    $statement->close();
    
    closeDb($conn);

    return $result;
}
?>
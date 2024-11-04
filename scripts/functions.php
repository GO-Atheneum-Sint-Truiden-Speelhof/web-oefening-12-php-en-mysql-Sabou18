<?php
function saveToDB(){
    $servername =
    $username =
    $password = ""
    $dbname = "test"

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO wedstrijd(Naam,Straat,Postcode,Gemeente,Telefoonnummer,E-mail adres,Geboortedatum)"
     VALUES ('".$POST["naam"]."','".$POST["straat"]."','".$POST["postcode"]."','".$POST["gemeente"]."',
     '".$POST["phone"]."','".$POST["email"]."','".$POST["geboorte"]."');
echo $sql;
    if ($conn->query($sql) === TRUE){
    echo "New record created"
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;   
    }

    $conn->close();


}

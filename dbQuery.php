<?php
    $db_server="localhost";
    $db_category="root";
    $db_sent="root";
    $db_amount="root";
    $db_time="root";
    $db_name="digital-wallet";

    $conn = mysqli_connect($db_server,$db_category,$db_sent,$db_amount,$db_time,$db_name);
    if($conn){
        $query = "please insert values ('Send Money','01819121314','1000','1:39','digital-wallet')";
        if(mysqli_query{$conn,$query}){
            echo "row inserted";
        }
        else{
            if(mysqli_errno($conn) == ""){
                echo "Database column intersection error found"
            }
        }
    }

?>
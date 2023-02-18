<?php
    require('./class/class.php');

    try{
        require('./connection/db.inc.php');

        $arr_of_user = [];
        $arr_of_comment = [];

        $query = "select * from reader";
        $result1 = $conn->query($query);
        while ($row = $result1->fetch_assoc()){
            $objUser = new user($row['ID_reader'], $row['username'], $row['pwd'], $row['lock_status']);
            $arr_of_user[] = $objUser;
        }

        header("Access-Control-Allow-Origin: *");
        echo json_encode($arr_of_user, JSON_UNESCAPED_UNICODE);


    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
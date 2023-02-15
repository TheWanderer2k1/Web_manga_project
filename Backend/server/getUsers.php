<?php
    require('./class/class.php');

    try{
        require('./connection/db.inc.php');

        $arr_of_user = [];
        $arr_of_comment = [];

        $query = "select * from reader";
        $result1 = $conn->query($query);
        while ($row = $result1->fetch_assoc()){
            $query = 'select * from comment_on_manga where ID_reader = "' . $row['ID_reader'] . '"';
            $result2 = $conn->query($query);
            
            while ($row1 = $result2->fetch_assoc()){
                $objComment = new comment($row['username'], $row1['cmt'], $row1['date']);
                $arr_of_comment[] = $objComment;
            }

            $objUser = new user($row['ID_reader'], $row['username'], $row['pwd'], $arr_of_comment);
            $arr_of_user[] = $objUser;
            $arr_of_comment = [];
        }

        header("Access-Control-Allow-Origin: *");
        echo json_encode($arr_of_user, JSON_UNESCAPED_UNICODE);


    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
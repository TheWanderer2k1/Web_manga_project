<?php
    require('./class/class.php');

    try{
        require('./connection/db.inc.php');
        //UPDATE reader SET lock_status = 1 WHERE reader.ID_reader = "1"
        $query = 'UPDATE reader SET lock_status = "'. $_POST['lock'] .'" WHERE reader.ID_reader = "'. $_POST['ID_reader'] .'"';
        $conn->query($query);
        if ($conn->affected_rows != 0){
            $message = 'thanh cong!';
        }else
            $message = 'khong thanh cong';

        header("Access-Control-Allow-Origin: *");
        echo json_encode(new message($message), JSON_UNESCAPED_UNICODE);

    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
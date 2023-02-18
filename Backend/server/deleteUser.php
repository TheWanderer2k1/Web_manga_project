<?php
    require('./class/class.php');

    try{
        require('./connection/db.inc.php');

        $query = 'DELETE FROM reader WHERE ID_reader = "'. $_POST['ID_reader'] .'"';
        //$query = 'DELETE FROM reader WHERE ID_reader = "dădadw"';
        $conn->query($query);
        if ($conn->affected_rows != 0){
            $message = 'delete thanh cong!';
        }else
            $message = 'delete khong thanh cong';

        header("Access-Control-Allow-Origin: *");
        echo json_encode(new message($message), JSON_UNESCAPED_UNICODE);

    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
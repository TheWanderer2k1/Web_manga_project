<?php
    require('./class/class.php');

    try{
        require('./connection/db.inc.php');

        $query = 'UPDATE comment_on_manga SET likes = "'. $_POST['likes'] .'" WHERE comment_on_manga.id = "'. $_POST['id_cmt'] .'"';
        //$query = 'UPDATE comment_on_manga SET likes = "13" WHERE comment_on_manga.id = "313"';
        $conn->query($query);
        if ($conn->affected_rows != 0){
            $message = 'update likes thanh cong!';
        }else
            $message = 'update khong thanh cong';

        //bug khong parse duoc msg
        header("Access-Control-Allow-Origin: *");
        // header("Content-Type: text/plain");
        echo json_encode(new message($message), JSON_UNESCAPED_UNICODE);

    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
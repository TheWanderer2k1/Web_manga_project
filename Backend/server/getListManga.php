<?php
    require('./class/class.php');

    $arrOfManga = [];

    try{
        require('./connection/db.inc.php');

        $query = 'select * from manga';
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()){
            //SELECT COUNT(ID_chapter) FROM has_chapter WHERE ID_manga = "1"
            $query2 = 'SELECT COUNT(ID_chapter) as total FROM has_chapter WHERE ID_manga = "'. $row['ID_manga'] .'"';
            $result2 = $conn->query($query2);
            $row2 = $result2->fetch_assoc();

            $objManga = new manga($row['ID_manga'], $row['name'], $row['author'], $row['genre'], $row['numberOfRead'], $row['thumbnail'],$row['description'], [], $row2['total']);
            $arrOfManga[] = $objManga;
        }

        header("Access-Control-Allow-Origin: *");
        echo json_encode($arrOfManga, JSON_UNESCAPED_UNICODE);

    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
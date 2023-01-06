<?php
    class manga{
        public $ID_manga;
        public $name;
        public $numberOfRead;
        public $thumbnail;
        public $description;
        //public $listChapter = [];

        public function __construct($ID_manga, $name, $numberOfRead, $thumbnail, $description){
            $this->ID_manga = $ID_manga;
            $this->name = $name;
            $this->numberOfRead = $numberOfRead;
            $this->thumbnail = $thumbnail;
            $this->description = $description;
        }
    }

    $arrOfManga = [];

    try{
        require('db.inc.php');

        $query = 'select * from manga';
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()){
            $objManga = new manga($row['ID_manga'], $row['name'], $row['numberOfRead'], $row['thumbnail'],$row['description']);
            $arrOfManga[] = $objManga;
        }

        header("Access-Control-Allow-Origin: *");
        echo json_encode($arrOfManga, JSON_UNESCAPED_UNICODE);

    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
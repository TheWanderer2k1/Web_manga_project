<?php
    class manga{
        public $ID_manga;
        public $name;
        public $numberOfRead;
        public $thumbnail;
        public $description;
        public $listChapter = [];

        public function __construct($ID_manga, $name, $numberOfRead, $thumbnail, $description, $listChapter){
            $this->ID_manga = $ID_manga;
            $this->name = $name;
            $this->numberOfRead = $numberOfRead;
            $this->thumbnail = $thumbnail;
            $this->description = $description;
            $this->listChapter = $listChapter;
        }
    }

    class chapter{
        public $ID_chapter;
        public $name;
        public $images = [];

        public function __construct($ID_chapter, $name, $images){
            $this->ID_chapter = $ID_chapter;
            $this->name = $name;
            $this->images = $images;
        }
    }

    class image{
        public $ID_img;
        public $path;

        public function __construct($ID_img, $path){
            $this->ID_img = $ID_img;
            $this->path = $path;
        }
    }

    $arrOfManga = [];

    try{
        require('db.inc.php');

        $query = 'select * from manga';
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()){
        
            //select * from chapter inner join has_chapter on chapter.ID_chapter = has_chapter.ID_chapter where has_chapter.ID_manga = 1;
            $query = 'select * from chapter inner join has_chapter on chapter.ID_chapter = has_chapter.ID_chapter where has_chapter.ID_manga =' . $row['ID_manga'];
            $result1 = $conn->query($query);

            while($row1 = $result1->fetch_assoc()){
                //select * from image_content inner join contain on image_content.ID_img = contain.ID_img where contain.ID_chapter = 1;
                $query = 'select * from image_content inner join contain on image_content.ID_img = contain.ID_img where contain.ID_chapter ='. $row1['ID_chapter'];
                $result2 = $conn->query($query);

                while($row2 = $result2->fetch_assoc()){
                    $objImg = new image($row2['ID_img'], $row2['path']);
                    $arrOfImg[] = $objImg;  //create array of images in a chapter
                }

                //create chapter object
                $objChapter = new chapter($row1['ID_chapter'], $row1['name'], $arrOfImg);
                //create array of chapter
                $arrOfChapter[] = $objChapter;
                $arrOfImg = [];
            }
            
            //create manga object
            $objManga = new manga($row['ID_manga'], $row['name'], $row['numberOfRead'], $row['thumbnail'], $row['description'], $arrOfChapter);
            $arrOfManga[] = $objManga;
            $arrOfChapter = []; 
        }

        echo json_encode($arrOfManga, JSON_UNESCAPED_UNICODE);

    }catch(mysqli_sql_exception $e){
        print('Error: ' . $e->getMessage());
    }
?>
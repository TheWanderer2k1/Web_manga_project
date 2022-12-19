<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        in development !
    -->
    <h3>List truyen</h3><p></p>
    <form action="" method="POST">
    <?php
        try{
            require('db.inc.php');
            $query = 'select * from manga';
            $result = $conn->query($query);

            while($row = $result->fetch_assoc()){
                //get list truyen
            }
    ?>
    </form>
    <?php

        }catch(mysqli_sql_exception $e){
            print('Error: ' . $e->getMessage());
        }
    ?>
</body>
</html>
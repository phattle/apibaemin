<?php
    require("connect.php");

    class Promotion{
        function __construct($id , $title , $description){
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
        }
    }

    $query = "SELECT * FROM promotion";

    $data = $con->query($query);

    $rowCount = mysqli_num_rows($data);

    $arrayPromotion = [];

    if ($rowCount){
        while ($row = mysqli_fetch_assoc($data)){
            array_push($arrayPromotion, new Promotion($row['id'] , $row['title'],$row['description']));
        }

        echo json_encode($arrayPromotion);

    }



?>
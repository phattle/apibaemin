<?php
    require("connect.php");

    class Store{
        function __construct($id , $name , $image , $featureddish , $rating , $totalvote, $idpromotion){
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->featureddish = $featureddish;
            $this->rating = $rating;
            $this->totalvote = $totalvote;
            $this->idpromotion = $idpromotion;
        }
    }

    $query = "SELECT * FROM store";

    $data = $con->query($query);

    $rowCount = mysqli_num_rows($data);

    $arrayStore = [];

    if ($rowCount){
        while ($row = mysqli_fetch_assoc($data)){
            array_push($arrayStore, new Store(
                                    $row['id'] ,
                                    $row['name'],
                                    $row['image'],
                                    $row['featureddish'],
                                    $row['rating'],
                                    $row['totalVote'],
                                    $row['idPromotion'],
                                ));
        }

        echo json_encode($arrayStore);

    }



?>

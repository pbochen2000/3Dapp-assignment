<?php
    //THIS METHOD RECEIVES AN AJAX $_GET WHICH IS UPDATED TO THE DATABASE//
    include 'model.php';

    $this->model = new Model();

    //'popblitz' HAS BEEN VOTED FOR//
    if(isset($_GET['pop'])){
        //ASSIGNS GET TO A LOCAL VARIABLE//
        $num_vote = $_GET['pop'];
        echo $num_vote;
        $query = "UPDATE Votes_Brand SET votes = $num_vote WHERE Id = 12";
        //$result = $myPDO->exec($query);
        //QUERY IS EXECUTED//
        $this->model->updateVotes($query);
    }
    //'captainapple' HAS BEEN VOTED FOR//
    if(isset($_GET['captain'])){
        //ASSIGNS GET TO A LOCAL VARIABLE//
        $num_vote = $_GET['captain'];
        echo $num_vote;

        //QUERY IS PREPARED//
        $query = "UPDATE Votes_Brand SET votes = $num_vote WHERE Id = 13";
        //$result = $myPDO->exec($query);
        //QUERY IS EXECUTED//
        $this->model->updateVotes($query);
    }
    //'grapeblast' HAS BEEN VOTED FOR//
    if(isset($_GET['grape'])){
        //ASSIGNS GET TO A LOCAL VARIABLE//
        $num_vote = $_GET['captain'];
        echo $num_vote;
        $query = "UPDATE Votes_Brand SET votes = $num_vote WHERE Id = 14";
        //$result = $myPDO->exec($query);
        //QUERY IS EXECUTED//
        $this->model->updateVotes($query);
    }


?>
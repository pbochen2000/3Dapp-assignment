<?php

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;

	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		//$this->model->dbCreateTable();
		//$this->model->dbInsertData();

		//GATHERS DATA FROM Model_3D TABLE//
		$data = $this->model->dbGetData();

		//GATHERS DATA FROM Images_Data TABLE//
		$dataImages = $this->model->dbGetDataImages();

		//GATHERS VOTING NUMBER DATA// 
		$dataVotes = $this->model->dbGetDataVotes();
		$this->load->view('home', $data, $dataImages, $dataVotes);
	}

	public function updateVotes(){
		//$test = $_GET['pop'];
		echo $test;  
		//$num_vote = $_POST['pop'];
    	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
    	//$query = "UPDATE Votes_Brand SET votes = $num_vote WHERE Id = 12";
		//console.log("ABOUT TO");   
    	//$this->model->updateVotes($query);
		//console.log("QUERY DONE");        
	}

}
?>
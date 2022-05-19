<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/database.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    													PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "CANT CONNECT TO DATABASE";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}

	//CREATE NEW SQLITE TABLE//
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Votes_Brand (Id INTEGER PRIMARY KEY, brand TEXT, votes INT);");
			return "Tables successfully created inside database1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		//$this->dbhandle = NULL;
	}

	//INSERT SPECIFIC DATA INTO SQLITE DATABASE//
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec( 
			"INSERT INTO Image_Data (Id, titleImage, pathImage, altData)
				VALUES (8, 'GalleryImage1', 'application/images/gallery/image2.jpeg', 'gallery-image-one');" .
			"INSERT INTO Image_Data (Id, titleImage, pathImage, altData)
				VALUES (9, 'GalleryImage2', 'application/images/gallery/image2.jpeg', 'gallery-image-two');".
			"INSERT INTO Image_Data (Id, titleImage, pathImage, altData)
				VALUES (10, 'GalleryImage3', 'application/images/gallery/image3.jpeg', 'gallery-image-three');".
			"INSERT INTO Image_Data (Id, titleImage, pathImage, altData)
				VALUES (11, 'GalleryImage4', 'application/images/gallery/image4.jpeg', 'gallery-image-four');".
			"INSERT INTO Votes_Brand (Id, brand, votes)
				VALUES (12, 'popblitz', 0);".
			"INSERT INTO Votes_Brand (Id, brand, votes)
				VALUES (13, 'captainapple', 0);".
			"INSERT INTO Votes_Brand (Id, brand, votes)
				VALUES (14, 'grapeblast', 0);");
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		//$this->dbhandle = NULL;
	}

	//FUNCTION RETURNS DATA FROM Model_3D TABLE//
	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM Model_3D';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;	
			while ($data = $stmt->fetch()) {
				$result[$i]['modelPath'] = $data['modelPath'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		//$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}

	//FUNCTION RETURNS DATA FROM Image_Data TABLE//
	public function dbGetDataImages(){
		try{
			$sql = 'SELECT * FROM Image_Data';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;
			while ($data = $stmt->fetch()) {
				$result[$i]['titleImage'] = $data['titleImage']; 
				$result[$i]['pathImage'] = $data['pathImage'];
				$result[$i]['altData'] = $data['altData'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		//$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	//FUNCTION RETURNS DATA FROM Votes_Brand TABLE//
	public function dbGetDataVotes(){
		try{

			$sql = 'SELECT * FROM Votes_Brand';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;
			while ($data = $stmt->fetch()) {
				$result[$i]['brand'] = $data['brand']; 
				$result[$i]['votes'] = $data['votes'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}

	//FUNCTION UPDATES Votes_Brand TABLE WITH AN INCREMENT OF 1+ ON WHICHEVER BRAND VOTE BUTTON WAS CLICKED//
	public function updateVotes($query){
		//$_GET['pop'];
		$this->dbhandle->exec($query);
	}
}
?>
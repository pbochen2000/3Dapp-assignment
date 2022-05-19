<?php
//CLASS WAS MODIFIED TO TAKE 3 SEPERATE DATA STREAMS//
class Load {
	function view($file_name, $data = null, $dataImages = null, $dataVotes = null)
	{	//ARRAYS ARE EXTRACTED INTO INDIVIDUAL DATA//
		if( is_array($data) ) {
			extract($data);
		}
		if( is_array($dataImages) ) {
			extract($dataImages);
		}
		if( is_array($dataVotes) ) {
			extract($dataVotes);
		}
		include $file_name . '.php';
	}
}
?>
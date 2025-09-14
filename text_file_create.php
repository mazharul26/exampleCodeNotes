<?php

//Create new text file

if (!empty($ser_fields)) {
			$emp_id = $this->session->userdata['user']['user_full_id'];
			$temp_file = "report_files/ser_fields_".$emp_id.".txt"; 

			// Open file for writing (creates file if it doesn’t exist)
			$handle = file_put_contents($temp_file, $ser_fields);

			if (!$handle) {
				die("Unable to open file.");
			}
			
		}


///get data from text file

	$emp_id = $this->session->userdata['user']['user_full_id'];
	$temp_file = "report_files/ser_fields_".$emp_id.".txt"; 

	if (file_exists($temp_file)) {
		$search_fields = file_get_contents($temp_file);
		//echo "File contents:\n";
		//echo $content;
			//dd($search_fields);
	} else {
		die("File not found.");
	}



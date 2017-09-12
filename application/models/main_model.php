<?php

class Main_model extends CI_Model
{
	// function to add to the database by using query builder
	function insert_data($data)
	{
		// runs code equivalent to:
		// INSERT INTO Users (firstName, lastName) VALUES ("John", "Doe")
		$this->db->insert("Testing", $data);

	}


	// function to get data from database
	function get_data()
	{
		$query = $this->db->get("Testing");

		return $query;
	}
}
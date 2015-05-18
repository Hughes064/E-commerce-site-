<?php 

class Main extends CI_Model 

{
	
	public function retrieve() 
	{
		$query = "SELECT * FROM courses";
		return $this->db->query($query) ->result_array();

	}

	public function add_course($course_info) 

	{
		$query = "INSERT INTO courses (name, description, created_at) VALUES (?,?,?)";
		$values = array($course_info['name'], $course_info['description'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	

	public function get_course_by_id($course_id) 
	{
		return $this->db->query("SELECT * FROM courses WHERE id=?", array($course_id))->row_array();

	}

	public function delete_course_by_id($course_id)
	{	
		return $this->db->query("DELETE FROM courses WHERE id=?", array($course_id));
	}
}

 ?>
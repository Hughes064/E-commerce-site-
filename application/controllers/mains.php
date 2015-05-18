<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller 
{

	public function index()
	{
		$this->load->model('Main');
		$view_data = array (
			'registrations' => $this->Main->retrieve()
			);	
		$this->load->view('courses', $view_data);

	}

	public function add() 
	{
		$this->output->enable_profiler(TRUE);  
        $this->load->model("Main"); 
        
        $course_info = array(
        	'name' => $this->input->post('name'),
        	'description'=>$this->input->post('description')
        	);

       $this->Main->add_course($course_info);
       redirect('/');
   
    }

    public function delete()
    {
     	$this->load->model('Main');
    	$id = $this->Main->get_course_by_id($this->input->post('value'));
    	

     	$id_delete = array(
     		'id' => $id

     		);
     	$this->load->view('delete', $id_delete);	 

    }

    public function delete_course() 
    {
    	
    	$this->load->model('Main'); 
    	$this->Main->delete_course_by_id($this->input->post('action'));
    	redirect('/');

    }
}
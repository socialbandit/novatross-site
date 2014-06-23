<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller{
	
	public function index() {
		
		$data["main_content"]= "home/index_view";
		$this->load->view("templates/default",$data);
	}
	

public function about() {
  $data["main_content"]= "home/about_us";
  $this->load->view("templates/default",$data);
 }	

}



?>
<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Page extends CI_Controller {

  public function index() {
    $data['page_title'] = 'Novatross-IQ | Home';
    $data["main_content"] = "page/index_view";	
    $this->load->view("templates/default", $data);
  }

  public function about() {
    $data['page_title'] = 'Novatross-IQ | About';
    $data["main_content"] = "page/about";
    $this->load->view("templates/default", $data);
  }

  public function contact() {
    $data['page_title'] = 'Novatross-IQ | Contact';
    $data["main_content"] = "page/contact";
    $this->load->view("templates/default", $data);
  }

  public function erp() {
    $data['page_title'] = 'Novatross-IQ | ERP Solutions';
    $data["main_content"] = "page/erp";
    $this->load->view("templates/default", $data);
  }

  public function document_management() {
    $data['page_title'] = 'Novatross-IQ | Document Management';    
    $data["main_content"] = "page/document_management";
    $this->load->view("templates/default", $data);
  }
  
  public function web_app_development() {
    $data['page_title'] = 'Novatross-IQ | Web Development';
    $data["main_content"] = "page/web_app_development";
    $this->load->view("templates/default", $data);
  }
  public function login() {
   
  $data ["main_content"] = "page/login";
  $this->load->view("templates/default", $data);
  
  }
  public function awv(){
   $data['page_title'] = 'Med-IQ | Annual Wellness Visit';
  $data ["main_content"]= "page/awv";
  $this->load->view ("templates/default",$data);
  
  
  
  }
   public function medical_records_scanning () {
  $data['page_title'] = 'Med-IQ |Medical Records Scanning';
 $data ["main_content"]= "page/medical_records_scanning";
  $this->load->view ("templates/default",$data);
  
  }
  

}

?>
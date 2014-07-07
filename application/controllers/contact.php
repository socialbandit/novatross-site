<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
	Usage:
	Edit the protected variables at start of class.
	If headerView/footerView is null it won't 
	load those views. Assuming you keep your header
	and footer in /views/template/ it will work
	with the defaults.

	There is no ip logging, no captcha. 

	Just a simple form :)

	Just go to site_url("contact") and it should
	work out of the box. 

 */
class Contact extends CI_Controller {


	// settings
	protected 	$sendEmailTo 		= 	'sendto@example.com';
	protected	$subjectLine 		= 	""; // actually set on line 39.
	
	// views
	protected 	$formView			= 	'contact';
	protected	$successView		= 	'contact_success';
	protected 	$headerView 		= 	'template/header'; //null to disable
	protected 	$footerView 		= 	'template/footer'; //null to disable

	// spam protection
	protected	$spam_protection	= 	true; // true or false
	protected 	$spam_question		=	'What color is a blue snake';
	protected	$spam_answer		= 	'blue';

	// other
	public 		$data 				= 	array(); // used for the views




	public function index() {

		
	}

	// the callback for checking the spam protection. Only one question/one answer, very basic.
	public function spam_protection($str)
	{
		// we will assume the user is lazy with their caps lock
		if (strtolower(trim($str)) == strtolower(trim($this->spam_answer))) {
			return true;
		}
		else {
			$this->form_validation->set_message('spam_protection', 'The %s field did not match the correct answer');
			return false;
		}
	}




}


<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{
	    $this->view->title = sujet;
		$this->view->render('login/index');
	}
	
	function run()
	{
	$this->model->run();
	}
	

}
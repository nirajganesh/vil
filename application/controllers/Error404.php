<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$clients=$this->fetch->getInfo('clients');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['web'=>$web ,'clients'=>$clients , 'title'=>'Error ! 404 page not found.']);
		$this->load->view('errors/html/custom_404');
		$this->load->view('footer');
	}
}

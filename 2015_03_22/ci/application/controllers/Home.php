<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('calendar');
	}

	public function index(){
		
		$this->load->model("M_user");

		$userList = $this->M_user->getAllUsers();

		$data = array(
				"title" => "Home",
				"users" => $userList,
			);

		$this->load->view("v_header", $data);
		$this->load->view("v_home", $data);
		$this->load->view("v_footer");
	}

	public function about(){

		$name = "Al- imran Ahmed";

		$data = array(
				'name' => $name,
				'email' => "al.imran.cse@gmail.com",
				'title' => "About",
				'calendar' => $this->calendar->generate(),
			);

		$this->load->view("v_header", $data);
		$this->load->view("v_about", $data);
		$this->load->view("v_footer");
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller {
	public function index($a = "")
	{
        echo "hellox" .$a;
		$this->load->view('welcome_message');
	}
}

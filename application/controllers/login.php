<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function load_form()
	{
        $this->load->view('layout/index');
	}
}

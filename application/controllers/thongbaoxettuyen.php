<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class thongbaoxettuyen extends CI_Controller {
	public function index()
	{
        $this->load->view('thongbaoxettuyen/index');
	}
}

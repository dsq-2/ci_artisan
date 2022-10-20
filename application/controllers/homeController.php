<?php defined('BASEPATH') OR exit('No direct script access allowed');


class HomeController extends CI_Controller
{
	public function index()
	{
		$this->load->view('navbar/navbar.php');
		$this->load->view('home');
		$this->load->view('footer/footer.php');
	}
}

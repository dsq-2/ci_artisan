<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class AnnonceController extends CI_Controller
{
	public function index()
	{
		$this->load->model('ProjetModel');
		$this->load->view('navbar/navbar.php');
		$projets= $this->ProjetModel->getAllProjet();
		// $this->load->view('annonce');
		$this->load->view('annonce', ['projets'=> $projets]);
		$this->load->view('footer/footer.php');
	}

	public function annonce()
	{
		$this->load->model('ProjetModel');
	}

}

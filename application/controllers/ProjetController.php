<?php defined('BASEPATH') OR exit('No direct script access allowed');


class ProjetController extends CI_Controller
{
	public function index()
	{
		$this->load->view('navbar/navbar.php');
		$this->load->model('ProjetModel');
		
		$this->load->view('projet');
		
		$this->load->view('footer/footer.php');
	}

	public function create()
	{
		$this->form_validation->set_rules('cp','Code Postal','required');
		$this->form_validation->set_rules('ville', 'Ville', 'required');
		$this->form_validation->set_rules('titre', 'titre', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		if($this->form_validation->run())
		{
			$data = [
				'cp' => $this->input->post('cp'),
				'ville' => $this->input->post('ville'),
				'titre' => $this->input->post('titre'),
				'description' => $this->input->post('description'),
			];

			$this->load->model('ProjetModel');
			$this->ProjetModel->insertProjet($data);
			// redirect('projet');
		}
		else{
			// redirect('projet');
			$this->index();
		}
		
		
		var_dump($data);
	}
}

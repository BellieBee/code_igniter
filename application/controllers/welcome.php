<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function greet_person($name) 
	{
		$data['name'] = $name;
		$this->load->view('greet_person', $data);
	}

	public function greet_everyone($person_hosting)
	{
		$data['team'] = $person_hosting;
		$data['listas'] = ['Rain', 'Lena', 'Aidan', 'Isidoro', 'John', 'Sonic'];
		$this->load->helper('url');
		$this->load->view('greet_everyone', $data);
	}

	public function listar_pokes() 
	{
		echo "Hola, " . $this->input->post('nombre') . ", bienvenido al grupo " . $this->input->post('grupo') . " y tu pokemon inicial es " . $this->input->post('poke');
	}

	public function calsum()
	{
		$num1 = $this->input->post('num1');
		$num2 = $this->input->post('num2');
		echo $num1 + $num2; 
	}

	public function calrest()
	{
		$num1 = $this->input->post('num1');
		$num2 = $this->input->post('num2');
		echo $num1 - $num2; 
	}

	public function calmult()
	{
		$num1 = $this->input->post('num1');
		$num2 = $this->input->post('num2');
		echo $num1 * $num2; 
	}

	public function caldiv()
	{
		$num1 = $this->input->post('num1');
		$num2 = $this->input->post('num2');
		echo $num1 / $num2; 
	}

}

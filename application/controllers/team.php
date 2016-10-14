<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Team');
	}

	public function index($us_id)
	{
		$team = $this->Team->get_users_details($us_id);
		$data['team'] = $team;
		$this->load->view('index', $data);
	}

}
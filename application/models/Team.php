<?php 

	class Team extends CI_Model
	{
		/*function get_users () 
		{
			return $this->db->get('users');
		} */

		function get_users_details($us_id) //es un filtro
		{
			$where['id'] = $us_id;
			return $this->db->get_where('users', $where);
		}
	}
<?php
	/**
	 * 
	 */
	class Stats_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_stats($batbowlstats,$team){

			$this->db->select('battingstats.Player,battingstats.Mat,battingstats.Inns,battingstats.Runs,battingstats.Ave,battingstats.HS,battingstats.Fifties,battingstats.Hundreds,battingstats.SR,battingstats.Team,battingstats.Sixes,battingstats.Fours');
			$this->db->from('battingstats');
			$this->db->order_by($batbowlstats,"DESC");
			if(count($team)>0 && !in_array('Allteams',$team))
			{
			$this->db->where_in('battingstats.Team',$team);
			}
			$this->db->limit(20);
			$query=$this->db->get();
			return $query->result();
		}
		public function getbowlstats($batbowlstats,$team)
		{
			$this->db->select('bowlingstats.Player,bowlingstats.Mat,bowlingstats.Inns,bowlingstats.Overs,bowlingstats.Mdns,bowlingstats.Runs,bowlingstats.Wkts,bowlingstats.Average,bowlingstats.Econ,bowlingstats.Team');
			$this->db->from('bowlingstats');
			if($batbowlstats=='Wkts')
			{
			$this->db->order_by($batbowlstats,"DESC");
			}
			else
			{
			$this->db->order_by($batbowlstats,"ASC");
			}
			if(count($team)>0 && !in_array('Allteams',$team))
			{
			$this->db->where_in('bowlingstats.Team',$team);
			}
			$this->db->limit(20);
			$query=$this->db->get();
			return $query->result();
		}
	}

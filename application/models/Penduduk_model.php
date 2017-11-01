<?php
class Penduduk_model extends CI_Model {
	public function get_penduduk_nik($nik)
	{
		$query = $this->db->get_where('datapenduduk', array('NIK' => $nik));
		return $query->row();
	}

	public function get_penduduk($keyword)
	{
		$this->db->select('*');
		$this->db->from('datapenduduk');
		$this->db->like('NAMA', $keyword);
		$this->db->or_like('NIK', $keyword);
		$query = $this->db->get();
		return $query->result();
	}
}
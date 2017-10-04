<?php
class Penduduk_model extends CI_Model {
	public function get_penduduk_nik($nik)
	{
		$query = $this->db->get_where('datapenduduk', array('NIK' => $nik));
		return $query->row();
	}
}
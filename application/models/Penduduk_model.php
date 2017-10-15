<?php
class Penduduk_model extends CI_Model {
	public function get_penduduk($keyword)
	{
		$q$query = $this->db->query ("SELECT nik,nama,jeniskelamin,tempatlahir,tanggallahir,umur,agama,status,pendidikan,pekerjaan,namaibu,namaayah 
		from datapenduduk 
		where NIK like '%keyword%' 
		or NAMA like '%keyword%' ");
		return $query->result();
	}
}

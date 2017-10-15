<?php
class Skhu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('penduduk_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('auth');
		}

		$this->form_validation->set_rules('keyword', 'NIK/NAMA', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Cari Data Penduduk';
			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('surat/skhu/cari_data_penduduk');
			$this->load->view('template/footer');
		} else {
			$data['title'] = 'Buat Surat Keterangan Usaha';
			$data['penduduk'] = $this->penduduk_model->get_penduduk($this->input->post('keyword'));
			$this->load->view('template/header', $data);
			$this->load->view('template/menu', $data);
			$this->load->view('surat/skhu/cari_data_penduduk');
			$this->load->view('surat/skhu/tampil_data_penduduk', $data);
			$this->load->view('template/footer');
		}
	}

	public function download($keyword)
	{
		$data = $this->penduduk_model->get_penduduk($nik);
		$this->load->library('phpword');
		$tgl = date('d');
		$bln = array(
					'01' => 'Januari',
					'02' => 'Februari',
					'03' => 'Maret',
					'04' => 'April',
					'05' => 'Mei',
					'06' => 'Juni',
					'07' => 'Juli',
					'08' => 'Agustus',
					'09' => 'September',
					'10' => 'Oktober',
					'11' => 'November',
					'12' => 'Desember'
				 );
		$bln = $bln[date('m')];
		$thn = date('Y');
		$tgl = $tgl.' '.$bln.' '.$thn;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('asset/surat/Surat Keterangan Usaha.docx');
		$templateProcessor->setValue('nama', $data->NAMA);
		$templateProcessor->setValue('nik', $data->NIK);
		$templateProcessor->setValue('ttl', $data->TEMPATLAHIR.', '.$data->TANGGALLAHIR);
		$templateProcessor->setValue('dsn', 'Manis');
		$templateProcessor->setValue('rt', '001');
		$templateProcessor->setValue('rw', '002');
		$templateProcessor->setValue('usaha', $data->PEKERJAAN);
		$templateProcessor->setValue('tgl_surat', $tgl);
		$filename = 'Surat Keterangan Usaha Update.docx';
		$templateProcessor->saveAs('asset/surat/'.$filename);
		header('location:'.base_url().'asset/surat/'.$filename);
	}

}

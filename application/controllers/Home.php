<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data_api = file_get_contents("https://api.kawalcorona.com/indonesia");
		$data['total'] = json_decode($data_api, TRUE);
		$this->template->load('template','home',$data);
	}
	public function detail()
	{
		$data_api = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
		$data = json_decode($data_api, TRUE);
		
		
		foreach ($data as $key) {
			if (ucfirst($this->input->post('provinsi')) == $key['attributes']['Provinsi'] || $this->input->post('provinsi') == $key['attributes']['Provinsi']) {
				$data['positif']  = $key['attributes']['Kasus_Posi'];
				$data['sembuh']  = $key['attributes']['Kasus_Semb'];
				$data['meninggal']  = $key['attributes']['Kasus_Meni'];
			}
			
		}

			$this->db->select('*');
			$this->db->from('provinsi');
			$this->db->join('rujukan', 'rujukan.id_provinsi = provinsi.id_provinsi');
			$this->db->where('nama_provinsi',$this->input->post('provinsi'));
			$data['rs'] = $this->db->get()->result();

			$data['provinsi'] = $this->db->get_where('provinsi',array('nama_provinsi'=>$this->input->post('provinsi')))->row();
			$this->template->load('template','provinsi',$data);
		}

}

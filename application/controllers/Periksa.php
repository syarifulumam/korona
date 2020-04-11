<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periksa extends CI_Controller {

	public function index()
	{
		$this->template->load('template','periksa');
    }
    public function hasil()
    {
        if($this->input->post('umur') < "14"){
            if ($this->input->post('pertama') == 'Ya' && $this->input->post('kedua') == 'Ya') {
                $data['pesan'] = "Lakukan Isolasi Diri Hubungi Puskemas terdekat atau Call-center 112 atau Posko Tanggap Covid Dinas Kesehatan di no 081112112112";
            } else {
                $data['pesan'] = "bebas dari covid-19, silakan jaga kesehatan";
            }
            
        }else{
            if ($this->input->post('pertama') == 'Ya' && $this->input->post('kedua') == 'Ya') {
                $data['pesan'] = "Silakan menuju ke rumah sakit rujukan terdekat di provinsi mu";
            } else {
                $data['pesan'] = "bebas dari covid-19, silakan jaga kesehatan";
            }
        }
		$this->template->load('template','hasil',$data);
    }
}

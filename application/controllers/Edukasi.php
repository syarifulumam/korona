<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edukasi extends CI_Controller {

	public function index()
	{
        $data['artikel'] = $this->db->get('artikel')->result();
		$this->template->load('template','edukasi',$data);
    }
    public function p($url)
    {
        $data['artikel'] = $this->db->get_where('artikel',array('url'=>$url))->row();
        $this->template->load('template','page',$data);
    }
}

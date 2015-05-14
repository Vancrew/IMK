<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

        $this->load->library('session');

		
	}
	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('anggota/anggota_pendaftaran');
		$this->load->view('template/footer');
	}
	public function registrasi()
	{

		$this->load->view('template/header');
		$this->load->view('anggota/anggota_pendaftaran');
		$this->load->view('template/footer');
	}
	public function reservasi()
	{
		$this->load->view('template/header');
		$this->load->view('anggota/anggota_reservasi');
		$this->load->view('template/footer');
	}
	public function reservasi2()
	{
		$this->load->view('template/header');
		$this->load->view('anggota/anggota_reservasi2');
		$this->load->view('template/footer');
	}
}

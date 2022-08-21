<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['jumlah_surat_masuk'] = $this->db->get('tb_surat_masuk')->num_rows();
		$data['jumlah_surat_keluar'] = $this->db->get('tb_surat_keluar')->num_rows();

		$this->load->view('template/head.php');
		$this->load->view('template/body_head_top_area');
		$this->load->view('template/body_mobile_menu_area');
		$this->load->view('template/body_main_menu_area');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}
}

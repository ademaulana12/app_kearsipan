<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
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
		$data['get_kategori'] = $this->db->get('tb_kategori')->result_array();

		$this->load->view('template/head.php');
		$this->load->view('template/body_head_top_area');
		$this->load->view('template/body_mobile_menu_area');
		$this->load->view('template/body_main_menu_area');
		$this->load->view('pengaturan', $data);
		$this->load->view('template/footer');
	}

	public function message($type, $title)
	{
		$message_alert = "
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 5000
			});

			Toast.fire({
				icon: '" . $type . "',
				title: '" . $title . "',
			});
			";
		return $message_alert;
	}

	public function tambah_kategori()
	{
		$data = [
			'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori'))
		];

		$insert = $this->db->insert('tb_kategori', $data);
		if ($insert) {
			$this->session->set_flashdata('messageAlert', $this->message('success', 'Berhasil tambah kategori'));
			redirect('pengaturan');
		} else {
			$this->session->set_flashdata('messageAlert', $this->message('error', 'Gagal tambah kategori'));
			redirect('pengaturan');
		}
	}
}

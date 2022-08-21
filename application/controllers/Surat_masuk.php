<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
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
		$data['get_surat_masuk'] = $this->db->get('tb_surat_masuk')->result_array();
		$data['get_kategori'] = $this->db->get('tb_kategori')->result_array();

		$this->load->view('template/head.php');
		$this->load->view('template/body_head_top_area');
		$this->load->view('template/body_mobile_menu_area');
		$this->load->view('template/body_main_menu_area');
		$this->load->view('surat_masuk', $data);
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

	public function tambah_data()
	{
		$config['upload_path'] = './upload/surat_masuk/';
		$config['allowed_types'] = 'pdf';
		$config['max_sized'] = '1024';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('upload_file')) {
			$upload_data = $this->upload->data();
			$data = [
				'nomor_surat' => htmlspecialchars($this->input->post('nomor_surat')),
				'tanggal_surat' => $this->input->post('tanggal_surat'),
				'jenis_surat' => htmlspecialchars($this->input->post('jenis_surat')),
				'pengirim_surat' => htmlspecialchars($this->input->post('pengirim_surat')),
				'deskripsi_surat' => htmlspecialchars($this->input->post('deskripsi_surat')),
				'file_surat' => $upload_data['file_name']
			];

			$this->db->insert('tb_surat_masuk', $data);

			$this->session->set_flashdata('messageAlert', $this->message('success', 'Berhasil tambah surat masuk'));
			redirect('surat_masuk');
		} else {
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('messageAlert', $this->message('error', $error . ' Mohon Di ulang'));
			redirect('surat_masuk');
		}
	}
}

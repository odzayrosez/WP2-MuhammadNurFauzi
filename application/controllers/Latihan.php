<?php
class Latihan extends CI_Controller
{
	public function index()
	{
	echo "Selamat Datang, Selamat Belajar Web Programming";
	}
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_Latihan');
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_Latihan->jumlah($n1, $n2);
		$this->load->view('view_latihan', $data);
	}
}
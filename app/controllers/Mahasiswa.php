<?php 

class Mahasiswa extends Controller{
	
	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa";
		$data['aktif'] = "mahasiswa";
		$data['mhs'] = $this->model("Mahasiswa_model")->getAllMhs();
		$this->view('template/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('template/footer');
	}

	public function detail($id)
	{
		$data['judul'] = "Detail Mahasiswa";
		$data['aktif'] = "mahasiswa";
		$data['mhs'] = $this->model("Mahasiswa_model")->getMhsById($id);
		$this->view('template/header',$data);
		$this->view('mahasiswa/detail',$data);
		$this->view('template/footer');
	}
}

 ?>
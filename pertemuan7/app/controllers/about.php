<?php
	class About extends Controller{
		public function index($nama = "Katon Wijana", $pekerjaan = "Dosen", $umur = "20"){
			$data['judul'] = "About";
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
			$data['umur'] = $umur;
			$this -> view("templates/header", $data);
			$this -> view("about/index", $data);
			$this -> view("templates/footer");
		}	
	}
?>
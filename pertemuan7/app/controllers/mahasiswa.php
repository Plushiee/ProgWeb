<?php

class Mahasiswa extends Controller{
	public function index() {
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this -> model('MahasiswaModel') -> getAllMahasiswa();
		$this -> view('templates/header', $data);
		$this -> view('mahasiswa/index', $data);
		$this -> view('templates/footer');
	}
	
	public function detail($id) {
		$data['judul'] = 'Detail Mahasiswa';
		$data['mhs'] = $this -> model('MahasiswaModel') -> getMahasiswaById($id);
		$this -> view('templates/header', $data);
		$this -> view('mahasiswa/detail', $data);
		$this -> view('templates/footer');
	}
	
	public function tambah() {
		if($this -> model('MahasiswaModel') -> tambahMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
			header('Location: '. BASEURL.'mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
			header('Location: '. BASEURL.'mahasiswa');
			exit;
		}
	}
		
	public function hapus($id) {
		if($this -> model('MahasiswaModel') -> hapusMahasiswa($id) > 0) {
			Flasher::setFlash('berhasil ', 'dihapus', 'success');
			header('Location: '. BASEURL.'mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal ', 'dihapus', 'danger');
			header('Location: '. BASEURL.'mahasiswa');
			exit;
		}
	}
    
    public function getUbah() {
        echo json_encode($this -> model('MahasiswaModel') -> getMahasiswaById($_POST['id']));
    }
    
    public function ubah() {
        if($this -> model('MahasiswaModel') -> ubahMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil ', 'diubah', 'success');
			header('Location: '. BASEURL.'mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal ', 'diubah', 'danger');
			header('Location: '. BASEURL.'mahasiswa');
			exit;
		}
    }
    
    public function cari() {
        $data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this -> model('MahasiswaModel') -> cariDataMahasiswa();
		$this -> view('templates/header', $data);
		$this -> view('mahasiswa/index', $data);
		$this -> view('templates/footer');
    }
}

?>
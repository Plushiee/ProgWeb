<?php
	class MahasiswaModel{
		private $table = 'mahasiswa';
		private $db;
		
		public function __construct(){
			$this -> db = new Database;
		}
		
		public function getAllMahasiswa(){
			$this -> db -> query('SELECT * FROM ' . $this -> table);
			return $this -> db -> resultSet();
		}
		
		public function getMahasiswaById($id){
			$this -> db -> query('SELECT * FROM ' . $this -> table . ' WHERE id = :id');
			$this -> db -> bind('id', $id);
			return $this -> db -> single();
		}
		
		public function tambahMahasiswa($data){
			$query = "INSERT INTO mahasiswa VALUES ('', :nim, :nama, :kota )";
			$this -> db -> query($query);
			$this -> db -> bind('nim', $data['nim']);
			$this -> db -> bind('nama', $data['nama']);
			$this -> db -> bind('kota', $data['kota']);
			
			$this -> db -> execute();
			return $this -> db -> rowCount();
		}
		
		public function hapusMahasiswa($id){
			$query = "DELETE FROM mahasiswa WHERE id = :id";
			$this -> db -> query($query);
			$this -> db -> bind('id', $id);
			
			$this -> db -> execute();
			return $this -> db -> rowCount();
		}
        
        public function ubahMahasiswa($data){
			$query = "UPDATE mahasiswa SET nim = :nim, nama = :nama, kota = :kota WHERE id = :id";
			$this -> db -> query($query);
			$this -> db -> bind('nim', $data['nim']);
			$this -> db -> bind('nama', $data['nama']);
			$this -> db -> bind('kota', $data['kota']);
            $this -> db -> bind('id', $data['id']);
			
			$this -> db -> execute();
			return $this -> db -> rowCount();
		}
        
        public function cariDataMahasiswa() {
            $keyword = $_POST['keyword'];
            
            $query = "SELECT * FROM " . $this -> table . " WHERE nama LIKE :keyword";
            $this -> db -> query($query);
            $this -> db -> bind ('keyword', "%$keyword%");
            return $this -> db -> resultSet();    
        }
	}
?>
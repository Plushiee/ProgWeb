<?php
	class MahasiswaModel{
		private $dbh; //<-- database handler
		private $hasilQuery;
		
		public function __construct(){
			$dsn = 'mysql:host=localhost;dbname=sia'; //<-- data source name
			try {
				$this -> dbh = new PDO($dsn, 'root', '');
			} catch(PDOException $e) {
				die ($e -> getMessage());
			}
		}
		
		public function getAllMahasiswa(){
			$this -> hasilQuery = $this -> dbh -> prepare('SELECT * FROM mahasiswa');
			$this -> hasilQuery -> execute();
			return $this -> hasilQuery -> fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>
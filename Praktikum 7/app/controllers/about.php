<?php
	class About{
		public function index($nama = "Katon Wijana", $pekerjaan = "Dosen"){
			echo "<hr>Saya adalah $nama, saya bekerja sebagai $pekerjaan<hr>";
		}

		public function page(){
			echo "about/page";
		}
		
		
	}
?>
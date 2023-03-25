<?php
	class Controller{
		public function view($view, $data=[]){
			require_once('F:/xampp/htdocs/Pemrograman Web/Pertemuan 7/app/views/' . $view . '.php');
		}
	}
?>
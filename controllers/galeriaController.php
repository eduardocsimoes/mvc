<?php 
	class galeriaController extends controller{

		public function index(){
			$dados = array();

		}

		public function abrir($id, $titulo){
			echo "Id: ".$id."<br>";
			echo "Titulo: ".$titulo;
		}
	}
 ?>
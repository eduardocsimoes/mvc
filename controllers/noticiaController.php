<?php 
	class noticiaController extends controller{

		public function index(){
			$dados = array();

		}

		public function abrir($id){
			echo "Id da noticia: ".$id."<br>";
		}

		public function abrirtitulo($titulo){
			echo "id do titulo: ".$titulo;
		}
	}
 ?>
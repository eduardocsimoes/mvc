<?php 
	class homeController extends controller{

		public function index(){
			$dados = array();
			$usuarios = new Usuarios();

			$dados['nome'] = $usuarios->getNome();

			$this->loadTemplate('home', $dados);
		}
	}
 ?>
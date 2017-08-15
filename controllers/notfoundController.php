<<<<<<< HEAD
<?php 
	class notfoundController extends controller{

		public function index(){
			$dados = array();

			$this->loadView('404', $dados);
		}
	}	
 ?>
=======
<?php
class notfoundController extends controller {

	public function index() {
		$this->loadView('404', array());
	}

}
>>>>>>> 8d83c4d733c65d78976a28bdba163cf074eea48b

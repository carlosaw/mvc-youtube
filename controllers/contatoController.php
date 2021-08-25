<?php
class contatoController extends controller {

	public function index() {
		$array = array();
		$this->loadTemplate("contato", $array);
	}

}
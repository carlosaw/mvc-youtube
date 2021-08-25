<?php
class contatoController extends controller {

	public function index() {
		$array = array();

		$this->loadTemplate("contato", $array);
	}

	public function enviar_email() {
		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			// Pega informações enviadas.
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$mensagem = $_POST['msg'];

			echo "NOME: ".$nome;
			exit;

		}
	}

}
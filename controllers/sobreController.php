<?php
class sobreController extends controller {

	public function index() {
		$array = array()	;
    $this->loadTemplate("sobre", $array);
	}
  public function carlos() {
    echo "Página sobre Carlos";
  }
}
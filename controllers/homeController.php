<?php
class homeController extends controller {

	public function index() {
		$array = array();

		$videos = new videos();
		$array['videos'] = $videos->getList(4);

		$this->loadTemplate("home", $array);
	}

}
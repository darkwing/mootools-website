<?php
class Demos extends Control {

	protected function index(){

		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = array_slice($url, 2);
		
		if (@strlen($path[0]) > 0){
			$this->data['html'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.html');
			$this->data['css'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.css');
			$this->data['js'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.js');
			$this->data['details'] = file_get_contents('Source/Demos/' . $path[0] . '/demo.details');
			$this->render();
		} else {
			$this->render('demosindex');
		}
	}
	
}

?>
<?php
class Learn extends Control {

	protected function index(){
		$menu = new PackageMenu('Source/Site/learn.json');
		$this->currentnav = 'docs';
		$this->menu = $menu->html;
		$this->render();
	}
	
}
?>
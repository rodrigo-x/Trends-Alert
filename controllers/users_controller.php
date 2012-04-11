<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $scaffold;

	public function login() { }

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
}
?>
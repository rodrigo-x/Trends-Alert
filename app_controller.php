<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	var $components = array('Auth','Session');
	var $helpers = array('Html', 'Form', 'Session','Flash');
 	
 	function beforeFilter() {
  		$this->Auth->userModel = 'User';
  		$this->Auth->fields = array('username' => 'email', 'password' => 'password');
  		$this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
  		$this->Auth->loginRedirect = array('controller' => 'alerts', 'action' => 'index');

  		// Cadastra novo usuário
		/*$this->loadModel('User');

		$this->User->create();
		$this->User->save(array(
			'email' => 'admin@admin.com',
			'password' => $this->Auth->password('admin'),
			'level' => '10',
			'ativo' => true
		));*/

 	}


	function flash( $message, $class = 'status' ) {
		$old = $this->Session->read('messages');
		$old[$class][] = $message;
		$this->Session->write('messages', $old );
	}
}

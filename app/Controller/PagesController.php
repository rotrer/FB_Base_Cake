<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Comuna', 'Regione', 'Usuario');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
                
                $regione = $this->Regione->find('all');
		if($regione) foreach($regione as $region){
			$arrDataR[] = array(
				"id" => $region["Regione"]["id"],
				"name" => utf8_encode($region["Regione"]["name"])
			);
		}

		$comuna = $this->Comuna->find('all');
		if($comuna) foreach($comuna as $comun){
			$arrDataC[] = array(
				"id" => $comun["Comuna"]["id"],
				"name" => utf8_encode($comun["Comuna"]["name"]),
				"region_id" => $comun["Comuna"]["region_id"]
			);
		}
            
                $getUser = $this->Usuario->findByFbuid($this->Session->read('idFb'));
                
		$this->set('regiones', $regione);
		$this->set('comunas', $arrDataC);
                $this->set('userData', $getUser['Usuario']);

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
        
        public function haztefan() {
		$title_for_layout = 'Hazte Fan';
                $fbSet = Configure::read('FB');

                $a_signed_request = $this->parse_signed_request($_REQUEST['signed_request'], $fbSet['APP_SECRET']);
                if ($a_signed_request['page']['liked']) {
                    $this->redirect(array('controller'=> 'usuarios', 'action' => 'index'));
                    exit();
                }
		$this->set(compact('title_for_layout'));
	}
        
}

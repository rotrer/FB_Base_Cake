<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array('DebugKit.Toolbar', 'Cakeless.Cakeless', 'Session');
    
    public function beforeRender(){
        $lessMainStyles = WWW_ROOT . 'less' . DS . 'main.less';
        $cssMainStyles = WWW_ROOT . 'css' . DS . 'main.css';

        $this->Cakeless->compile( $lessMainStyles, $cssMainStyles );
    }
    
    public function parse_signed_request($signed_request, $secret) {
            list($encoded_sig, $payload) = explode('.', $signed_request, 2);

            $sig = $this->base64_url_decode($encoded_sig);
            $data = json_decode($this->base64_url_decode($payload), true);

            if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
                    error_log('Unknown algorithm. Expected HMAC-SHA256, '.$data['algorithm']);
                    return null;
            }

            $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
            if ($sig !== $expected_sig) {
                    error_log('Bad Signed JSON signature!');
                    return null;
            }

            return $data;
    }

    public function base64_url_decode($input) {
            return base64_decode(strtr($input, '-_', '+/'));
    }
}

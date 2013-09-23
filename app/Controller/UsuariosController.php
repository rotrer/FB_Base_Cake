<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 */
class UsuariosController extends AppController {

	public function index() {
            $fbSet = Configure::read('FB');
            if(!$this->Session->check('access_token')){
                $this->Session->write('state', md5(uniqid(rand(), TRUE)));
                $urlAuthFb = 'https://www.facebook.com/dialog/oauth?client_id='.$fbSet['APP_ID'].'&redirect_uri='.urlencode(Router::url(array('controller' => 'usuarios', 'action' => 'callback'), true)).'&scope=email,publish_stream&state='.$this->Session->read('state');
                $this->set('urlAuthFb', $urlAuthFb);
            }else{
                $this->redirect("/");
                exit();
            }
	}

	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

	public function add( $args = null) {
		if ($this->request->is('post') || $args != null) {
			$this->Usuario->create();
                        #Si registra desde otro metodo
                        if($args) $this->request->data = $args['Usuarios'];
                        $getUser = $this->Usuario->findByFbuid($this->request->data["fbuid"]);
                        if(!$getUser['Usuario']['fbuid']){
                            if ($this->Usuario->save($this->request->data)) {
                                    #$this->Session->setFlash(__('The usuario has been saved'));
                                    #$this->redirect(array('action' => 'index'));
                            } else {
                                    #$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
                            }
                        }  else {
                            $this->Usuario->id = $getUser['Usuario']['id'];
                            $this->Usuario->save(array('ultimo_acceso' => date('c')));
                        }
                        
                        #$log = $this->Usuario->getDataSource()->getLog(false, false);
                        #debug($log);
                        #die();
		}
	}
        
        public function callback(){
            if($this->request->query('code')){
                $fbSet = Configure::read('FB');
                $urlToken = 'https://graph.facebook.com/oauth/access_token?client_id='.$fbSet['APP_ID'].'&redirect_uri='.urlencode(Router::url(array('controller' => 'usuarios', 'action' => 'callback'), true)).'&client_secret='.$fbSet['APP_SECRET'].'&code='.$this->request->query('code');

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $urlToken);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_POST, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                $output = curl_exec($ch);
                $meta = explode("&", $output);
                $access = explode("=", $meta[0]);

                curl_close($ch);


                $urlData = 'https://graph.facebook.com/me?access_token='.$access[1];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $urlData);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_POST, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                $outputData = curl_exec($ch);
                $metaData = json_decode($outputData);
                $metaData->access_token = $access[1];
                curl_close($ch);

                $arrUserAdd['Usuarios'] =
                    array(
                        "fbuid" => $metaData->id,
                        "firstname" => $metaData->first_name,
                        "lastname" => $metaData->last_name,
                        "email" => $metaData->email,
                        "genero" => $metaData->gender,
                        "ip" => CakeRequest::clientIp(),
                        "complete" => 0,
                        "created" => date('c'),
                        "meta" => json_encode(array("link" => $metaData->link, "locale" => $metaData->locale, "name" => $metaData->name, "timezone" => $metaData->timezone, "updated_time" => $metaData->updated_time, "username" => $metaData->username))
                    );
                $this->add($arrUserAdd);
                $this->Session->write('idFb', $metaData->id);
                $this->Session->write('access_token', $metaData->access_token);
                
                $this->redirect($fbSet['FB_APP']);
                #$this->redirect('http://dev.local.bowl.cl/FB_Base_Cake/');
                exit();
            }else{
                $this->redirect('/');
                exit();
            }
        }
}

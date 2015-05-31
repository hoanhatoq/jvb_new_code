<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    var $ext = '.html';
    var $components =  array('Session');
	public function beforeFilter(){
		if(isset($this->params->language)){
			$lang = $this->params->language;
			if($lang == 'en'){				
				Configure::write('Config.language','eng');
			}

			if($lang == 'vi'){
				Configure::write('Config.language','vie');
			}
		   	
		}else{
		  	Configure::write('Config.language','jpn');
	  	}
 	}
	
	//override redirect
	    public function redirect( $url, $status = NULL, $exit = true ) {
	        if (!isset($url['language'])	) {
	            $url['language'] = $this->Session->read('Config.language');
	        }
	        parent::redirect($url,$status,$exit);
	    }
}

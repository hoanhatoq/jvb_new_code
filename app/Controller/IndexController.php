<?php
	App::uses('AppController', 'Controller');
	class IndexController extends AppController{
		
	    
			
		public function index(){
// 			$lang_code = $this->params->language;
// 			if($lang_code == ''){
// 			   $lang_code = 'jp';
// 			}
// 			$data = $this->News->getAll($lang_code);
// 			$this->set('data', $data);	
		}
		public function detaill($id = null){
			$lang_code = $this->params->language;
			$data = $this->News->getAll($lang_code);
			$this->set('data', $data);
			$news = $this->News->getNews($id,$lang_code);
			$this->set('news',$news);
			
		}

		
	}

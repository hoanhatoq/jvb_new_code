<?php

	App::uses('AppController', 'Controller');

	class NewsController extends AppController{

		/*Ten rut gon cua controller*/

		var $name = "News";

		/*Khai bao su dung model*/
		
		public $uses = array('News');


		public function index()
		{
// 			$lang_code = $this->params->language;
		
// 			if($lang_code == ''){
// 			   $lang_code = 'jp';
// 			}

// 			$data = $this->News->getAll($lang_code);
// 			$this->set('data', $data);
		
		}

		public function detaill($id = null)
		{
			$lang_code = $this->params->language;
			$data = $this->News->getAll($lang_code);
			$this->set('data', $data);
			$news = $this->News->getNews($id,$lang_code);
			$this->set('news',$news);	
		}
		
		    
	}

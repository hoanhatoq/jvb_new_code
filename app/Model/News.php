<?php
App::uses('AppModel', 'Model');

	class News extends AppModel{
		
		/*Khai bao su dung bang*/

		public $useTable= "news";

		/*truong khoa trinh cua bang*/

		public $primaryKey = "id"; 

		public function getAll($lang_code)
		{		
			$sql2 = (' SELECT * FROM news
						LEFT JOIN news_lang ON news.id_news = news_lang.id_news
						LEFT JOIN lang ON news_lang.id_lang = lang.id_lang
						WHERE
						iso_code = "'.$lang_code.'"
			');
			$coupons = $this->query($sql2);
			$news= array();
			foreach ($coupons as $value){
				$news_id = $value['news']['id_news'];
				$news[$news_id]['title_id']=$value['news']['id_news'];
				$news[$news_id] = array(
					'title_id' => $value['news']['id_news'],
					'highlight' => $value['news']['highlight'],
					'title' => 	$value['news_lang']['title'],
					'content' => $value['news_lang']['content']
				);		
			}		
			return $news;
		}

		public function getNews($news_id,$lang_code){
			$sql = ('
				SELECT *
				FROM expresion_tbl AS Expresion 
				INNER JOIN news_tbl AS News 
				ON Expresion.title_content_id = News.title_news_id OR Expresion.title_content_id =News.content_news_id
				WHERE Expresion.lang_code ="'.$lang_code.'" AND news_id ="'.$news_id.'"');
			$coupons1= $this->query($sql);
			$infoNews= array();
			foreach ($coupons1 as $value) {
				if($value['News']['title_news_id'] == $value['Expresion']['title_content_id']){
					$infoNews['title'] = $value['Expresion']['value'];
				}
				elseif ($value['News']['content_news_id'] == $value['Expresion']['title_content_id']) {
						$infoNews['content'] =$value['Expresion']['value'];
				}	
			}
			return $infoNews;
		}
		
		public function cutString($text,$n)
		{
			$string = explode(" ", $text);
			$a = $string;
			$str = '';
			if (count($a)>$n) {
				for ($i=0; $i<$n; $i++) {
					$str.=" " .$a[$i];
				}
			}
			return $str."...";
		}
	}
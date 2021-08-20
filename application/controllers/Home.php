<?php 
	class Home extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$thirukural_data = $this->getThirukuralData();
			$this->load->view('home',array('thirukural_data'=>$thirukural_data));
		}

		private function getThirukuralData(){
			$num = rand(1,330);
			$url = "https://api-thirukkural.vercel.app/api?num=".$num;	
		

			$curl = curl_init();
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($curl,CURLOPT_URL,$url);
			$result = curl_exec($curl);
			$result = json_decode($result,true);
			$data['no'] = $result['number'];
			$data['text'] = $result['tam_exp'];
			return $data;
		}
		
	}

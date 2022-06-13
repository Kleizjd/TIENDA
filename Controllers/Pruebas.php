<?php 

	class Pruebas extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function pruebas()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Pruebas - Tienda Virtual";
			$data['page_title'] = "Pruebas - Tienda Virtual";
			$data['page_name'] = "Pruebas";
			$this->views->getView($this,"pruebas",$data);
		}

	}
 ?>
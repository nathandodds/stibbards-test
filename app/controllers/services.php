<?php
    class services extends C_Controller {

        public function index() {

        	$this->addTag ('title', 'Services');
	        $this->addTag ( 'meta_keywords', 'Pegisis');
	        $this->addTag ( 'meta_desc', 'Pegisis');

	        $this->addStyle('layout');

	        $this->setView('services/index');
        } 
    }
  ?>

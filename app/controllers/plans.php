<?php
    class Plans extends C_Controller {

        public function index()
        {
	        	 $this->addTag ('title', 'Plans');
	        $this->addTag ( 'meta_keywords', 'Pegisis');
	        $this->addTag ( 'meta_desc', 'Pegisis');

	        $this->addStyle('layout');

	        $this->setView('plans/index');
        }

      

    }
  ?>

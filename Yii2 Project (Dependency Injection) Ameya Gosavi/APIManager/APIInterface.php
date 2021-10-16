<?php 
namespace app\APIManager;

    interface APIInterface {
    	public function index();
        public function view($api_id);
        public function create();
        public function update($api_id);
        public function delete($api_id);
  }

?>
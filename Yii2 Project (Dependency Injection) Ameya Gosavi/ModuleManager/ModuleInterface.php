<?php 
namespace app\ModuleManager;

    interface ModuleInterface {
    	public function index();
        public function view($module_id);
        public function create();
        public function update($module_id);
        public function delete($module_id);
  }

?>
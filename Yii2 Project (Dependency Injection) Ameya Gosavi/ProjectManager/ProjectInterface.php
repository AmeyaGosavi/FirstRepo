<?php 
namespace app\ProjectManager;

    interface ProjectInterface {
        public function index();
        public function view($project_id);
        public function create();
        public function update($project_id);
        public function delete($project_id);
  }

?>
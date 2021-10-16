<?php 
namespace app\UserManager;

    interface UserInterface {
        public function index();
        public function view($user_id);
        public function create();
        public function update($user_id);
        public function delete($user_id);
  }

?>
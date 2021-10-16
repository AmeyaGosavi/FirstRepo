<?php 
namespace app\UserAddressManager;

    interface UserAddressInterface {
    	public function index();
        public function view($user_address_id);
        public function create();
        public function update($user_address_id);
        public function delete($user_address_id);
  }

?>
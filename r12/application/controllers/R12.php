<?php 
class R12 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function view(){
		$data['title'] = "PRIVATE DINING ROOM";

		$this->load->view('p/vanilla.php');
	}
}
?>

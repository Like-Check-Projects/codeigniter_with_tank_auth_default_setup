<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	function __construct(){
		parent::__construct();
	}

	function index()
	{
		
		$this->load->view( 'welcome.php' );
		
		// login stuff
		/*if ( ! $this->tank_auth->is_logged_in() ) {
			redirect( '/auth/login/' );
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('welcome', $data);
		}*/
	
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
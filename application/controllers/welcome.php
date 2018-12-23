<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function about_scholar()
	{
		$this->load->view('about_scholar');
	}
	
	public function about_vmo()
	{
		$this->load->view('about_vmo');
	}
	public function principal()
	{
		$this->load->view('principal');
	}
	public function chairman_message()
	{
		$this->load->view('chairman_message');
	}
	public function director_message()
	{
		$this->load->view('director_message');
	}
	public function facilities()
	{
		$this->load->view('facilities');
	}
	public function infrastructure()
	{
		$this->load->view('infrastructure');
	}
	public function curriculum()
	{
		$this->load->view('curriculum');
	}
	public function school_life()
	{
		$this->load->view('school_life');
	}
	public function admission_procedure()
	{
		$this->load->view('admission_procedure');
	}
	public function fee_schedule()
	{
		$this->load->view('fee_schedule');
	}
	public function guidelines()
	{
		$this->load->view('guidelines');
	}
	public function examination()
	{
		$this->load->view('examination');
	}
	public function offerd_cources()
	{
		$this->load->view('offerd_cources');
	}
	public function library()
	{
		$this->load->view('library');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function gallary()
	{
		$this->load->view('gallary');
	}
	public function academics()
	{
		$this->load->view('academics');
	}
	public function edumodel()
	{
		$this->load->view('edumodel');
	}
	public function smc()
	{
		$this->load->view('smc');
	}
	public function activity()
	{
		$this->load->view('activity');
	}
	public function aboutScholl()
	{
		$this->load->view('aboutScholl');
	}
	public function humanResource()
	{
		$this->load->view('humanResource');
	}
	public function salaryStaff()
	{
		$this->load->view('salaryStaff');
	}
	public function studentEnroll()
	{
		$this->load->view('studentEnroll');
	}
	public function tc()
	{
		$this->load->view('tc');
	}
	public function calender()
	{
		$this->load->view('calender');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
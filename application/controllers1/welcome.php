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
		
		$data['subPage'] = 'Home';
		$data['smallTitle'] = 'Dashboard';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Dashboard';
		$data['mainContent'] = 'welcome_message';
		$this->load->view("includes/template", $data);
	}
	public function chairmanMessage()
	{
	
		$data['subPage'] = 'Chairman Message';
		$data['smallTitle'] = 'Chairman Message';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | About Us';
		$data['mainContent'] = 'chairmanMessage';
		$this->load->view("includes/template", $data);
	}
	public function directorMessage()
	{
	
		$data['subPage'] = 'Director Message';
		$data['smallTitle'] = 'Chairman Message';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | About Us';
		$data['mainContent'] = 'directorMessage';
		$this->load->view("includes/template", $data);
	}
	public function schoolSociety()
	{
	
		$data['subPage'] = 'School Society';
		$data['smallTitle'] = 'School Society ';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | About Us';
		$data['mainContent'] = 'schoolSociety';
		$this->load->view("includes/template", $data);
	}
	public function academics()
	{
	
		$data['subPage'] = 'Aademics';
		$data['smallTitle'] = 'Academics';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'academics';
		$this->load->view("includes/template", $data);
	}
	public function carricullam()
	{
	
		$data['subPage'] = 'Carricullam';
		$data['smallTitle'] = 'Carricullam';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'carricullam';
		$this->load->view("includes/template", $data);
	}
	public function infrastructure()
	{
	
		$data['subPage'] = 'Infrastrure';
		$data['smallTitle'] = 'Infrastrure';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'infrastructure';
		$this->load->view("includes/template", $data);
	}
	public function medical()
	{
	
		$data['subPage'] = 'medical';
		$data['smallTitle'] = 'medical';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'medical';
		$this->load->view("includes/template", $data);
	}
	public function contactus()
	{
	
		$data['subPage'] = 'Contact Us';
		$data['smallTitle'] = 'Contact Us';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'contactus';
		$this->load->view("includes/template", $data);
	}
	public function gallery()
	{
	
		$data['subPage'] = 'Gallery';
		$data['smallTitle'] = 'Contact Us';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'gallery';
		$this->load->view("includes/template", $data);
	}
	
	
public function schoolStaff()
	{
	
		$data['subPage'] = 'Gallery';
		$data['smallTitle'] = 'Contact Us';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'schoolStaff';
		$this->load->view("includes/template", $data);
	}
	public function eduModelModule()
	{
	
		$data['subPage'] = 'Education Model';
		$data['smallTitle'] = 'Education Model';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Model';
		$data['mainContent'] = 'eduModelModule';
		$this->load->view("includes/template", $data);
	}
	public function eduConcepts()
	{
	
		$data['subPage'] = 'Education Model';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'eduConcepts';
		$this->load->view("includes/template", $data);
	}
	public function mission()
	{
	
		$data['subPage'] = 'Education Model';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'mission';
		$this->load->view("includes/template", $data);
	}
	public function reachUs()
	{
	
		$data['subPage'] = 'Reach Us';
		$data['smallTitle'] = 'Reach Us';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Contact Us';
		$data['mainContent'] = 'reachus';
		$this->load->view("includes/template", $data);
	}
	public function career()
	{
	
	
		$data['msg'] = $this->uri->segment(3);
		
		$data['subPage'] = 'Education Model';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'career';
		$this->load->view("includes/template", $data);
	}
	public function feedBack()
	{
	$data['msg'] = $this->uri->segment(3);
		$data['subPage'] = 'Education Model';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'feedBack';
		$this->load->view("includes/template", $data);
	}
	
	public function summitfeedback(){
	
		$name = $this->input->post("name");
		
		$lobe = $this->input->post("email1");
		$phone = $this->input->post("mobile");
		$date1 = date("Y-m-d");
			$this->load->library('email');

			$this->email->from('info@scholarsacademyghazipur.org', 'Scholar Academy');
			$this->email->to($lobe); 
			$this->email->cc('info@scholarsacademyghazipur.org'); 
			$this->email->bcc('info@scholarsacademyghazipur.org'); 
			
			$this->email->subject('Thanks For Visiting us');
			$this->email->message('Your Details are Successfully seved and we will contact you soon. Thanks Scholarsacademy Ghazipur');	
			
			$this->email->send();
			
			redirect("welcome/feedBack/success");
			
	
	
	}
	
	public function admissionGuide()
	{
	
		$data['subPage'] = 'Admission Guide';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'admissionGuide';
		$this->load->view("includes/template", $data);
	}
	public function transportRule()
	{
	
		$data['subPage'] = 'Transport Rule';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'transportRule';
		$this->load->view("includes/template", $data);
	}
	public function theSchool()
	{
	
		$data['subPage'] = 'The School';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'theSchool';
		$this->load->view("includes/template", $data);
	}
	public function activities()
	{
	
		$data['subPage'] = 'Activities';
		$data['smallTitle'] = 'Education Concepts';
		$data['pageTitle'] = 'Overview of all Section';
		$data['title'] = 'Scholar Academy | Education Concepts';
		$data['mainContent'] = 'activities';
		$this->load->view("includes/template", $data);
	}
	public function summitResume()
	{
	
		$name = $this->input->post("name");
		$exp = $this->input->post("subExp");
		$lobe = $this->input->post("email1");
		$phone = $this->input->post("phone");
		$date1 = $this->input->post("date1");
		//$upload=$this->input->post("upfile");
		
		//$senderEmail = "";
		$subject = "Scholer Academy";
		$message = "Hi ";
		
		$this->load->library('email');

			$this->email->from('info@scholarsacademyghazipur.org', 'Scholar Academy');
			$this->email->to($lobe); 
			$this->email->cc('info@scholarsacademyghazipur.org'); 
			$this->email->bcc('info@scholarsacademyghazipur.org'); 
			
			$this->email->subject('Thanks For Visiting us');
			$this->email->message('Your Details are Successfully seved and we will contact you soon. Thanks Scholarsacademy Ghazipur');	
			
			$this->email->send();
			redirect("welcome/career/success");
	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
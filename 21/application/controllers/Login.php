	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {

	    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'security'));
		$this->load->library('form_validation');		
		$this->load->model('User_model');
		$this->load->model('School_model');
	    }

	    public function index() {
		$data['title'] = 'Green School';
		//Validation
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	       if ($this->form_validation->run() == FALSE) {
		    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		} else {
		    $post = $this->security->xss_clean($this->input->post());
		    $varCheckLogin = $this->User_model->UserLogin($post);
		    if ($varCheckLogin) {
				    if($varCheckLogin=="success"){
			// redirect(base_url('school'));
			redirect(base_url('WasteTransformers'));
					}
					elseif($varCheckLogin=="warning")
					{
		$this->session->set_flashdata('error', "

GSP Audit 2019 has now been closed. Audit 2020 will open for participation by mid-2020. Please log in to the GSP website for further updates. In case you wish to update the school details, viz. GSP coordinator's name, principal's name, mobile number, and email address, please send a mail with the updated details to support@greenschoolsprogramme.org.
	If your school has not registered earlier for the GSP Audit, earlier please <a href='http://greenschoolsprogramme.org/audit/19/register' target='blank_'>register here</a>.
 
	");
					}
			    else if($varCheckLogin=="error") {
			     $this->session->set_flashdata('error', 'Invalid Email/Password!');
			   }
// 			    else if($varCheckLogin=="complitesurveyschool") {
// 			     $this->session->set_flashdata('error', '<p style="font-size:20px; font-family:Lato; font-weight:bold;line-height:30px; margin:0px">Your school has already submitted the GSP audit in Phase I which ended on 11 November 2019.</p>');
// 			   }
		    } else if($varCheckLogin=="error") {
			$this->session->set_flashdata('error', 'Invalid Email/Password!');
		    }
		}
		$this->load->view('login', $data);
	    }

	    public function Register() {

		$data['states'] = $this->User_model->getStates();
		    $this->load->library('user_agent');
		  $browser = $this->agent->browser();
		  $browser_version = $this->agent->version();
		 $os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		$data['user'] = array(

			'browser_details' => $browser,
			'browser_version' => $browser_version,
			'user_ip_address' => $ip_address
		);
		    
		  $data['user2'] = $this->db->select('user_ip_address')
			->where('user_ip_address',$ip_address)
	    	        ->from('gsp_school')	    	 
	    	        ->get()
	    	        ->result();
		    
		//$this->form_validation->set_rules('captcha', 'Captcha', 'callback_validate_captcha');
		$this->form_validation->set_rules('state', 'State', 'required');		   
		$this->form_validation->set_rules('udise', 'Udise', 'required');
		$this->form_validation->set_rules('name', 'School Name', 'required');
		$this->form_validation->set_rules('address1', 'Address Line 1*', 'required');
		//$this->form_validation->set_rules('address2', 'Address Line 2*', 'required');
			$this->form_validation->set_rules('coemail', 'Cordinator Email', 'required|valid_email|is_unique[gsp_school.coemail]');
		if ($this->form_validation->run() == FALSE) {
		    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		    $this->load->helper('captcha');
		    $vals = array(
	//                'img_path' => './uploads/',
	//                'img_url' => 'http://studio-tesseract.co/GSP/uploads/',
			'img_path' => './uploads/img',
			'img_url' =>'http://www.greenschoolsprogramme.org/audit/18/uploads/img',
			'img_width' => '230',
			'img_height' => 50,
			'expiration' => 3600,
			'word_length' => 8,
			'font_size' => 20,
			'font_path' => './captcha/Verdana.ttf',
		    );

		    $cap = create_captcha($vals);
		    $data['captcha_image'] = $cap['image'];
			
			print_r($data['captcha_image']);
			
			
		    $this->session->set_userdata('captcha_word', $cap['word']);
		} else {
		    $details = $this->input->post();
		    $pass = $this->generateRandomString();
		    $userDetails = array(
			'email' => $details['coemail'],
			'username' => $details['name'],
			'Password' => strtolower($pass)
		    );

		    $user = $this->User_model->CreateUser($userDetails);
		    $details['userid'] = $user;
		    $details['pass'] = strtolower($pass);
		    $user = $this->School_model->RegisterUser($details);
		    if (isset($user)) {
			/* $this->session->set_flashdata('success', 'You have successfully registered your school for the GSP Audit. Kindly add support@greenschoolsprogramme.org to your Contact list so that emails from GSP do not go into your spam box. Good luck! GSP Team'.'<a href="'.base_url('login').'">Login Page</a>'); */
			redirect(base_url('login/welcome'), 'refresh');
		    } else {
			$this->session->set_flashdata('error', 'There is an error occured creating your account !');
		    }
		    redirect(base_url('login/register'), 'refresh');
		}
		    
		   $this->load->view('register', $data);
	    }

	    public function validate_captcha() {
		//echo $this->session->userdata('captcha_word').$this->input->post('captcha'); exit;
		if ($this->session->userdata('captcha_word') != $this->input->post('captcha')) {
		    $this->form_validation->set_message('validate_captcha', 'Please Enter a Valid Captcha !');
		    return false;
		} else {
		    return true;
		}
	    }

	    public function generateRandomString($length = 5) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		    $randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	    }

	    function ChangePass() {
		$post = $this->input->post();
		if ($this->User_model->CheckPassword($post, $this->session->userdata('USER_ID'))) {
		    if ($this->User_model->ChangePassword($post, $this->session->userdata('USER_ID')))
			redirect('/Login');
		}
		else {
		    $this->session->set_flashdata('error', 'Invalid Password');
		    redirect('/School');
		}
	    }

	    /*     * GSP Forget Password
	     */

	    public function forgetpassword() {
	    	$tt= $this->input->post('emailval');
	    	$email = $this->db->where('coemail', $tt)->select('make_school_disabled')->from('gsp_school')->get()->result();
	    	if(!empty($email) && $email[0]->make_school_disabled==0){	    	 
	    		echo "Invalid e-mail ID. Please get in touch with us at support@greenschoolsprogramme.org for further details";
	    		exit;
	    	}
	    	else{
			$temp = $this->User_model->forgetPassword($tt);		 
			echo json_encode($temp);			
		  }
	    }


	    public function welcome() {
		$data['title'] = 'Green School';
		$this->load->view('welcome-message', $data);
	    }
	  /*************** browser check ***********/
	    public function browser_check() {
		$data['title'] = 'Green School';
		$this->load->view('browser-check', $data);
	    }



	    /*
	     * Check Duplicate Mail
	     */

	    public function checkschoomail() {
		//echo '<pre>'; print_r($this->input->get('comobile')); exit
		$this->db->select('*');
		if($this->input->get('schoolemail'))
		{
		    $this->db->where('schoolemail', $this->input->get('schoolemail'));
		}else if($this->input->get('coemail'))
		{
		    $this->db->where('coemail', $this->input->get('coemail'));
		}else if($this->input->get('comobile'))
		{
		    $this->db->where('comobile', $this->input->get('comobile'));
		    ///echo 'Hi'; exit;
		}
		$query = $this->db->get('gsp_school');
		//echo $this->db->last_query();
		//echo '<pre>'; print_r($query); exit;
		$num = $query->num_rows();
		if($num > 0)
		{
		    echo "false";
		}else
		{
		    echo "true";
		}
	    }

	}

	?>

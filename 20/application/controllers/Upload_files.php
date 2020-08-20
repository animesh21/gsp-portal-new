<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_Files extends CI_Controller
{
	function  __construct() {
		parent::__construct();
		$this->load->model('file');
	}
	
	function index(){
            //echo $this->input->post('Fuels');
            //echo '<pre>'; print_r($_FILES['files']); exit;
		$data = array();
		if(!empty($_FILES['files']['name'])){
                        
			$filesCount = count($_FILES['files']['name']);
                       // echo $filesCount; exit;
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['image[]']['name'] = $this->session->userdata('USERNAME').'_'.$this->input->post('Fuels').'_'.$_FILES['files']['name'][$i];
				$_FILES['image[]']['type'] = $_FILES['files']['type'][$i];
				$_FILES['image[]']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['image[]']['error'] = $_FILES['files']['error'][$i];
				$_FILES['image[]']['size'] = $_FILES['files']['size'][$i];

				$uploadPath = 'uploads/files/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'png|jpg|jpeg|pdf|doc|xls|xlsx|docx';
				$config['max_size']	= '100';
				//$config['max_width'] = '1024';
				//$config['max_height'] = '768';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('image[]')){
					$fileData = $this->upload->data();
					$uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['created'] = date("Y-m-d H:i:s");
					$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['userid'] = $this->session->userdata('USER_ID');

                }
			}
			if(!empty($uploadData)){
				//Insert files data into the database
				$insert = $this->file->insert($uploadData);
				//$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                                //redirect(base_url($url), 'refresh');
				//$this->session->set_flashdata('statusMsg',$statusMsg);
                                if($insert==true)
                                {
                                    echo 'success';
                                }else
                                {
                                    echo 'error';
                                }
			}
		}
		//get files data from database
        //$data['files'] = $this->file->getRows();
		//pass the files data to view
		///$this->load->view('upload_files/index', $data);
	}
        public function getHtml()
        {
            $this->load->view('test1');
        }
        
         //Delet files
        public function deletFiles()
        {
            $varResponse='';
            $test=$this->file->removeFiles($this->input->post('id'));
            if($test==true)
            {
                $varResponse="success";
            }else
            {
                $varResponse="error";
            }
            echo $varResponse;
        }
}

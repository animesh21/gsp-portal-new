Editing:  
/home/labsupsilon/public_html/GSP/application/models/School_model.php
Encoding:    Re-open Use Code Editor     Close  Save Changes

<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class School_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getSchool($argPost) {
        $query = $this->db->select('*')
                ->from('gsp_school')
                ->where(array('userid' => $argPost))
                ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $school = array(
                'name' => $row->name,
                'address1' => $row->address1,
                'address2' => $row->address2,
                'country' => $row->country,
                'state' => $row->state,
                'district' => $row->district,
                'city' => $row->city,
                'pincode' => $row->pincode,
                'std' => $row->std,
                'telephone' => $row->telephone,
                'country_code' => $row->country_code,
                'schoolemail' => $row->schoolemail,
                'principle_name' => $row->principle_name,
                'mobile' => $row->mobile,
                'coname' => $row->coname,
                'coemail' => $row->coemail,
                'comobile' => $row->comobile
            );

            return $school;
        }
        return $school = array("name" => "Sunil");
    }

    public function RegisterUser($argPost) {

        $update = array(
            'userid' => $argPost['userid'],
            'name' => $argPost['name'],
            'address1' => $argPost['address1'],
            'address2' => $argPost['address2'],
            'country' => $argPost['country'],
            'state' => $argPost['state'],
            'district' => $argPost['district'],
            'city' => $argPost['city'],
            'pincode' => $argPost['pincode'],
            'std' => $argPost['std'],
            'telephone' => $argPost['telephone'],
            'country_code' => $argPost['country_code'],
            'schoolemail' => $argPost['schoolemail'],
            'principle_name' => $argPost['principle_name'],
            'mobile' => $argPost['mobile'],
            'coname' => $argPost['coname'],
            'coemail' => $argPost['coemail'],
            'comobile' => $argPost['comobile']
        );

        if ($this->db->insert('gsp_school', $update)) {
            //Sending Mail To The School
            $insert_id = $this->db->insert_id();
            $query = $this->db->select('a.*, b.email AS emailfiled, b.password, b.username')
                            ->from('gsp_school AS a')
                            ->join('gsp_user AS b', 'a.userid=b.id', 'left')
                            ->where('a.id', $insert_id)
                            ->get()->row();
            //echo '<pre>'; print_r($query); exit;
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $from = "info@studiotesseract.co";
            $to = $query->schoolemail;
            $subject = "GSP Audit Registration";
            $msg = "Dear" . $query->name . "," . "<br><br><br>";
            $msg .= "Thank you for registering your school government middle school kungri, for the GSP (Green Schools Programme) Audit 2017. Your account has been successfully created.<br><br><br>";
            $msg .= "To participate in GSP Audit 2017 that will open in July/ August 2017, please remember to save your username and password given below.<br><br><br>";
            $msg .= "The launch date of GSP Audit 2017 will be announced at www.greenschoolsprogramme.org, in July 2017.<br><br><br>";
            $msg .= "URL: http://www.greenschoolsprogramme.org/audit <br><br><br>";
            $msg .= "Username: '" . $query->schoolemail . "'<br><br><br>";
            $msg .= "Password: '" . $query->password . "'<br><br><br>";
            $msg .= "In case of any further queries please feel free to write back to us.<br><br><br>";
            $msg .= "Thansks,<br><br><br>";
            $msg .= "The Green Schools Programme Team <br><br><br>";
            $msg .= "Your registration details are as follows: <br><br><br>";
            $msg .= "Name of School: " . $query->name . "<br><br><br>";
            $msg .= "Address Line 1: " . $query->address1 . "<br><br><br>";
            $msg .= "Address Line 2: " . $query->address2 . "<br><br><br>";
            $msg .= "State: " . $query->state . "<br><br><br>";
            $msg .= "City: " . $query->city . "<br><br><br>";
            $msg .= "Pincode: " . $query->pincode . "<br><br><br>";
            $msg .= "Land Line No: " . $query->telephone . "<br><br><br>";
            $msg .= "Pricipal's Name: " . $query->principle_name . "<br><br><br>";
            $msg .= "Moblile Number: " . $query->mobile . "<br><br><br>";
            $msg .= "GSP Coordinator's Name: " . $query->coname . "<br><br><br>";
            $msg .= "GSP Coordinator's Emai: " . $query->coemail . "<br><br><br>";
            $msg .= "Mobile Number: " . $query->comobile . "<br><br><br>";
            $this->email->to($to);
            $this->email->from($from, "GSP Team");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();
            //echo $this->email->print_debugger();
            //die();
            return true;
        }
    }

    public function GetRegistered() {
        $query = $this->db->select('*')
                ->from('gsp_school')
                ->get();
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row;
        }
    }

    public function getSchools() {
        $query = $this->db->select('COUNT(*) count')
                ->from('gsp_school')
                ->get();

        $row = $query->row();
        return $row->count;
    }

    public function getState($stateID) {
        $data = $this->db->select('*')->where('id ', $stateID)->from('states')->get()->row()->name;
        return $data;
    }

    /*
     * Get Cities
     */

    public function getCity($cityID) {
        $data = $this->db->select('*')->where('id ', $cityID)->from('cities')->get()->row()->name;
        return $data;
    }

}
?>


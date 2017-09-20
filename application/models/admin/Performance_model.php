<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * Get Data
     */

    public function getData() {
        return $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('a.progress', 100)
                        ->order_by('a.id', 'desc')
                        ->limit(2)
                        ->get()->result();
    }

    /*
     * Genrate Excel
     */

//    public function getExcel($argArrId) {
//        $isdCode = 91;
//        $output = "";
//        $output .= '"S.No",';
//        $output .= '"School ID",';
//        $output .= '"School Name",';
//        $output .= '"Address1",';
//        $output .= '"Address2",';
//        $output .= '"Country",';
//        $output .= '"State",';
//        $output .= '"District",';
//        $output .= '"City",';
//        $output .= '"Pincode",';
//        $output .= '"ISD Code",';
//        $output .= '"STD Code",';
//        $output .= '"Landline Number",';
//        $output .= '"School Email",';
//        $output .= '"Principal Name",';
//        $output .= '"Principal Mobile",';
//        $output .= '"Coordinator Name",';
//        $output .= '"Coordinator Email",';
//        $output .= '"Coordinator Mobile",';
//        $output .= '"School Category",';
//        $output .= '"No of Shifts",';
//        $output .= '"Password",';
//        $output .= '"Reg Date",';
//        $output .= '"Comp Date",';
//        $output .= '"Completeness",';
//        $output .= '"Low Level",';
//        $output .= '"High Level",';
//        $output .= '"High Level",';
//        $output .= '"Board of Education"';
//        $output .= '"Total Population"';
//        $output .= '"Students"';
//        $output .= '"Teachers"';
//        $output .= '"Non Teaching Staff"';
//        $output .= '"Male"';
//        $output .= '"Female"';
//        $output .= '"Visitor"';
//        $output .= '"No of Working Days"';
//        $output .= '"Audit  Period"';
//        $output .= '"Location"';
//        $output .= '"Type of Aid"';
//        $output .= '"Total Classrooms"';
//        $output .= '"Window Floor Ratio"';
//        $output .= '"Vehicles Ownership"';
//        $output .= '"No.of Vehicle"';
//        $output .= '"School Owned Vehicles"';
//        $output .= '"PUC done"';
//        $output .= '"Vehicles with AC"';
//        $output .= '"Vehicles more than 8 years Old"';
//        $output .= '"No of authorize parking"';
//        $output .= '"Annual Road Worthiness Certificate"';
//        $output .= '"No of Buses"';
//        $output .= '"No of Buses(Type)"';
//        $output .= '"No of Cars"';
//        $output .= '"No of Cars(Type)"';
//        $output .= '"No of Vans"';
//        $output .= '"No of Vans(Type)"';
//        $output .= '"No of Other Vehicle"';
//        $output .= '"No of Other Vehicle(Type)"';
//        $output .= '"Subtotal"';
//        $output .= '"CNG in State"';
//        $output .= '"CNG in Area"';
//        $output .= '"School Bus"';
//        $output .= '"Public Bus"';
//        $output .= '"School Tranport"';
//        $output .= '"Public Tranport"';
//        $output .= '"Taxi Three"';
//        $output .= '"Taxi Four"';
//        $output .= '"Personel four-wheeler"';
//        $output .= '"Personel two-wheeler"';
//        $output .= '"Bycycle"';
//        $output .= '"On-foot"';
//        $output .= '"Other"';
//        $output .= '"Student suffer from respiratory"';
//        $output .= '"Air quality monitoring"';
//        $output .= '"Air quality monitoring close to school"';
//        $output .= '"Points in Air Section"';
//        $output .= '"Electricity Bill"';
//        $output .= '"School has own vehicle"';
//        $output .= "\n";
//        for ($i = 0; $i < count($argArrId); $i++) {
//            $output .= '"' . $i + 1 . '",';
//            $output .= '"' . $a->id . '",';
//            $output .= '"' . $a->name . '",';
//            $output .= '"' . $a->address1 . '",';
//            $output .= '"' . $a->address2 . '",';
//            $output .= '"' . $a->country . '",';
//            $output .= '"' . $a->state_name . '",';
//            $output .= '"' . $a->district_name . '",';
//            $output .= '"' . $a->city . '",';
//            $output .= '"' . $a->pincode . '",';
//            $output .= '"' . $isdCode . '",';
//            $output .= '"' . $a->std . '",';
//            $output .= '"' . $a->telephone . '",';
//            $output .= '"' . $a->schoolemail . '",';
//            $output .= '"' . $a->principle_name . '",';
//            $output .= '"' . $a->mobile . '",';
//            $output .= '"' . $a->coname . '",';
//            $output .= '"' . $a->coemail . '",';
//            $output .= '"' . $a->comobile . '",';
//            $arr = array(
//                '1' => 'Day Scholar',
//                '2' => 'Day Boarding',
//                '3' => 'Residential',
//                '4' => 'Day Scholar + Day Boarding',
//                '5' => 'Day Boarding + Residential',
//                '6' => 'Day Scholar + Residential',
//                '7' => 'Day Scholar + Day Boarding + Residential'
//            );
//            $vale = (getFiled('Q1S1', $argArrId[$i]) != '') ? getFiled('Q1S1', $argArrId[$i]) : "";
//            if ($vale != '') {
//                $output .= '"' . $arr[$vale] . '",';
//            }
//        }
//    }

}

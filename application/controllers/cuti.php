<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuti extends CI_Controller 
{

	 function __construct()
	{
		parent::__construct();

		
	}

	public function index ()
	{
		$data['awal']='';
		$data['akhir']= '';
		$data['hasil']= '';
		$this->load->view('cuti', $data);
	}

	public function browse()
	{

		$awal    =  strtotime($this->input->post('awal'));
		$akhir    = strtotime($this->input->post('akhir'));

		$date  = $awal;
		#$data['hasil']=0;
		$jml_day = 0;

		while ( $date<= $akhir) {

			$day = date("D",$date);
			if( $day !="Sat" AND $day !="Sun"){
				//$day;
				$jml_day++;
			}
			# code...
			$date= strtotime("+1 day",$date);
		}
		#echo $jml_day;
		#print_r($_POST);
		#exit();
		$data['hasil']=$jml_day;
		$data['awal'] =$this->input->post('awal');
		$data['akhir']= $this->input->post('akhir');
		
		$this->load->view('cuti',$data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	//public function dashboard_status()
//	{
//		$sql1="SELECT * FROM opinfo WHERE opstatus=0";
//		$query1=$this->db->query($sql1);
//		$result=$query1->result_array();
//		return $result;
//	}
//	public function all_op_count()
//	{
//		$sql1="SELECT count(opid) AS opcount FROM opinfo WHERE opstatus=0";
//		$query1=$this->db->query($sql1);
//		$result=$query1->result_array();
//		return $result;
//	}
	public function empdept_insert($empdept)
	{
		$sql="SELECT * FROM empdept WHERE department='$empdept'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO empdept VALUES ('$empdept')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function empdept_list()
	{
		$query="SELECT * FROM empdept ORDER BY department ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function empsection_insert($department,$section)
	{
		$sql="SELECT * FROM empsection WHERE department='$department' AND section='$section'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO empsection VALUES ('','$department','$section')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function empsection_list()
	{
		$query="SELECT * FROM empsection ORDER BY department ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function designation_insert($designation)
	{
		$sql="SELECT * FROM empdesignation WHERE designation='$designation'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO empdesignation VALUES ('$designation')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function designation_list()
	{
		$query="SELECT * FROM empdesignation ORDER BY designation ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function show_sectionname($department)
	{
		$query="SELECT section FROM empsection WHERE department='$department' ORDER BY department ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function emp_insert($pic_file,$userid,$unit,$department,$section,$empname,$password,$email,$mobile,$designation,$user_type)
	{
		$sql="SELECT * FROM user WHERE userid='$userid' OR email='$email'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO user VALUES ('$userid','$unit','$department','$section','$empname','$password','$email','$mobile','$designation','$user_type','$pic_file')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	//public function importData($data) {
// 
//        $res = $this->db->insert_batch('euser',$data);
//        if($res){
//            return TRUE;
//        }else{
//            return FALSE;
//        }
// 
//    }
	
	public function buyer_insert($pic_file,$buyername,$origin,$local_address)
	{
		$sql="SELECT * FROM buyer WHERE buyername='$buyername'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO buyer VALUES ('$buyername','$origin','$local_address','$pic_file')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function bimglup($buyername,$pic_file)
	{
		
		$sql="UPDATE buyer SET image='$pic_file' WHERE buyername='$buyername'";
		$query=$this->db->query($sql);
	}
	public function user_list()
	{
		$query="SELECT * FROM user";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function emp_list_up($userid)
	{
		$sql1="SELECT * FROM user WHERE userid='$userid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function elup($unit,$department,$section,$userid,$empname,$password,$email,$mobile,$designation)
	{
		
		$sql="UPDATE user SET unit='$unit',department='$department',section='$section',name='$empname',password='$password',email='$email',mobile='$mobile',designation='$designation' WHERE userid='$userid'";
		$query=$this->db->query($sql);
	}
	public function eimglup($userid,$pic_file)
	{
		
		$sql="UPDATE user SET image='$pic_file' WHERE userid='$userid'";
		$query=$this->db->query($sql);
	}
	public function buyer_list()
	{
		$query="SELECT * FROM buyer";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	
	public function buyer_list_up($buyername)
	{
		$sql1="SELECT * FROM buyer WHERE buyername='$buyername'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function blup($buyer,$buyername,$origin,$local_address)
	{
		
		$sql="UPDATE buyer SET buyername='$buyername',origin='$origin',local_address='$local_address' WHERE buyername='$buyer'";
		$query=$this->db->query($sql);
	}
	public function fac_insert($facid,$facname,$fac_address)
	{
		$sql="SELECT * FROM factory WHERE factoryid='$facid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO factory VALUES ('$facid','$facname','$fac_address')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function factory_list()
	{
		$query="SELECT * FROM factory";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function factory_list_up($facid)
	{
		$sql1="SELECT * FROM factory
		
		
		WHERE factoryid='$facid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function flup($fid,$facid,$factoryname,$factory_address)
	{
		
		$sql="UPDATE factory SET factoryid='$facid',factoryname='$factoryname',factory_address='$factory_address' WHERE factoryid='$fid'";
		$query=$this->db->query($sql);
	}
	public function auditparty_insert($auditparty)
	{
		$sql="SELECT * FROM auditparty WHERE apname='$auditparty'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO auditparty VALUES ('$auditparty')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function auditparty_list()
	{
		$query="SELECT * FROM auditparty";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function audittype_list()
	{
		$query="SELECT * FROM audittype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function auditscope_list()
	{
		$query="SELECT * FROM auditscope";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function audittype_insert($audittype)
	{
		$sql="SELECT * FROM audittype WHERE audittyname='$audittype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO audittype VALUES ('$audittype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function auditscope_insert($auditscope)
	{
		$sql="SELECT * FROM auditscope WHERE auditscopename='$auditscope'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO auditscope VALUES ('$auditscope')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function preauditinfo_insert($data)
	{
		$sql="SELECT * FROM preauditinfo WHERE factoryname='$data[factoryname]' AND buyername='$data[buyername]' AND auditparty='$data[auditparty]' AND audittype='$data[audittype]' AND auditscope='$data[auditscope]' AND fsl='$data[fsl]' AND auditdate='$data[adate]'";
		$query=$this->db->query($sql);
		//$cid=$data['ordername'].$data['colour_id'];
		if($query->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql="INSERT INTO preauditinfo VALUES ('','$data[factoryname]','$data[buyername]','$data[auditparty]','$data[audittype]','$data[auditscope]','$data[fsl]','$data[findings]','$data[observation]','$data[adate]',0)";
				$query=$this->db->query($sql);
				return true;
			}
	}
	public function preauditinfo_pdfinsert($factoryname,$buyername,$audittype,$pdf_file,$adate)
	{
		$sql1="SELECT * FROM preauditinfopdf WHERE  factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND preaudate='$adate'";
		$query1=$this->db->query($sql1);
		//$cid=$data['ordername'].$data['colour_id'];
		if($query1->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql2="INSERT INTO preauditinfopdf VALUES ('','$factoryname','$buyername','$audittype','$pdf_file','$adate')";
				$query2=$this->db->query($sql2);
				return true;
			}
	}
	public function capinfo_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT * FROM preauditinfo WHERE auditdate='$adate' AND factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype'  AND status=0";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function capinfo_report_insert($data)
	{
		$sql1="UPDATE preauditinfo SET status=1 WHERE preaid='$data[chpreaid]'";
		$query1=$this->db->query($sql1);
		$sql="INSERT INTO capreport VALUES ('','$data[preaid]','$data[cap]','$data[pr]','$data[pd]','$data[wd]','$data[pic_file]','',0)";
		$query=$this->db->query($sql);
		
		$query3="SELECT * FROM preauditinfo WHERE preaid='$data[preaid]' AND status=0";
		$result3=$this->db->query($query3);
		$re=$result3->result_array();
		foreach($re as $row3)
		{
			$va=$row3['preaid'];
			$sql2="DELETE FROM capreport WHERE preaid='$va'";
		$query2=$this->db->query($sql2);
		}
		
		
		
		return $query;
		
	}
	public function capfile_upload($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT COUNT(preauditinfo.preaid) AS cpreaid,COUNT(capreport.preaid) AS capreaid,preauditinfo.buyername,preauditinfo.factoryname,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.auditdate FROM preauditinfo 
		LEFT JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		WHERE auditdate='$adate' AND factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function capstatus_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT preauditinfo.preaid,preauditinfo.factoryname,preauditinfo.buyername,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.fsl,preauditinfo.findings,preauditinfo.observation,preauditinfo.auditdate,capreport.cap,capreport.pr,capreport.tardate,capreport.comdate,capreport.capimage,capreport.ratings,capreport.status,user.name 
		FROM preauditinfo 
		LEFT JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		LEFT JOIN user ON
		user.userid=capreport.pr
		WHERE preauditinfo.factoryname='$factoryname' AND preauditinfo.buyername='$buyername' AND preauditinfo.audittype='$audittype' AND preauditinfo.auditdate='$adate' ORDER BY preauditinfo.fsl";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function cap_status_insert($data)
	{
		$sql="UPDATE capreport SET ratings='$data[ratings]',status='$data[status]' WHERE preaid='$data[preaid]'";
		$query=$this->db->query($sql);
		return $query;
	}
	public function capfile_upload_insert($factoryname,$buyername,$audittype,$auditdate,$pdf_file)
	{
		$sql="SELECT * FROM capreportpdf WHERE factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND auditdate='$auditdate'";
		$query=$this->db->query($sql);
		//$cid=$data['ordername'].$data['colour_id'];
		if($query->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql="INSERT INTO capreportpdf VALUES ('','$factoryname','$buyername','$audittype','$pdf_file','$auditdate')";
				$query=$this->db->query($sql);
				return true;
			}
	}
	public function capfull_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT preauditinfo.preaid,preauditinfo.factoryname,preauditinfo.buyername,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.fsl,preauditinfo.findings,preauditinfo.observation,preauditinfo.auditdate,preauditinfopdf.preauditpdf,capreport.cap,capreport.pr,capreport.tardate,capreport.comdate,capreport.capimage,capreport.ratings,capreport.status,capreportpdf.pdffile,user.name 
		FROM preauditinfo 
		LEFT JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		LEFT JOIN user ON
		user.userid=capreport.pr
		LEFT JOIN preauditinfopdf ON
		preauditinfopdf.factoryname=preauditinfo.factoryname AND
		preauditinfopdf.buyername=preauditinfo.buyername AND
		preauditinfopdf.audittype=preauditinfo.audittype AND
		preauditinfopdf.preaudate=preauditinfo.auditdate
		LEFT JOIN capreportpdf ON
		capreportpdf.factoryname=preauditinfo.factoryname AND
		capreportpdf.buyername=preauditinfo.buyername AND
		capreportpdf.audittype=preauditinfo.audittype AND
		capreportpdf.auditdate=preauditinfo.auditdate
		WHERE preauditinfo.factoryname='$factoryname' AND preauditinfo.buyername='$buyername' AND preauditinfo.audittype='$audittype' AND preauditinfo.auditdate='$adate' ORDER BY preauditinfo.fsl";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function preauditfile_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT preauditpdf FROM preauditinfopdf 
		
		WHERE factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND preaudate='$adate'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function capauditfile_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT pdffile FROM capreportpdf 
		
		WHERE factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND auditdate='$adate'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	
	
	function insertRecord($data){
 
    
      

        //$this->db->insert('euser', $newuser);
		$sql="INSERT INTO euser VALUES ('$data[fname]','$data[lname]')";
				$query=$this->db->query($sql);
				return $query;
      }
 	public function department_insert($department)
	{
		$sql="SELECT * FROM department WHERE deptname='$department'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO department VALUES ('$department')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function process_insert($process)
	{
		$sql="SELECT * FROM process WHERE processname='$process'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO process VALUES ('$process')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function department_list()
	{
		$query="SELECT * FROM empdept";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function process_list()
	{
		$query="SELECT * FROM process";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
    public function notice_insert($pic_file,$unit,$noticename)
	{
		
		$sql="INSERT INTO notice_album VALUES ('','$unit','$noticename','$pic_file',CURDATE())";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function notice_list()
	{
		$query="SELECT * FROM notice_album ORDER BY ndate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function policy_insert($pic_file,$unit,$department,$process,$user,$policyname)
	{
		
		$sql="INSERT INTO policy_album VALUES ('','$unit','$department','$process','$user','$policyname','$pic_file',CURDATE())";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function policy_list()
	{
		$query="SELECT * FROM policy_album ORDER BY pdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function sop_insert($pic_file,$unit,$department,$process,$user,$policyname)
	{
		
		$sql="INSERT INTO sop_album VALUES ('','$unit','$department','$process','$user','$policyname','$pic_file',CURDATE())";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function sop_list()
	{
		$query="SELECT * FROM sop_album ORDER BY sdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function flowchart_insert($pic_file,$unit,$department,$process,$user,$policyname)
	{
		
		$sql="INSERT INTO flowchart_album VALUES ('','$unit','$department','$process','$user','$policyname','$pic_file',CURDATE())";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function flowchart_list()
	{
		$query="SELECT * FROM flowchart_album ORDER BY sdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function checklist_serial_insert($sname)
	{
		
		$sql="INSERT INTO checklist_serial_insert VALUES ('','$sname')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function checklist_serial()
	{
		$query="SELECT * FROM checklist_serial_insert ORDER BY csid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function checklist_insert($data)
	{
		
				
				$sql="INSERT INTO checklist_item VALUES ('','$data[factoryname]','$data[checklistserial]','$data[checklistname]')";
				$query=$this->db->query($sql);
				return true;
			
	}
	public function checklistinfo_check_insert($data)
	{
		//print_r($data['yes_no']);
				
				//echo count($factoryname);
//				for($i=0;$i<count($factoryname);$i++)
//				{
				//echo $sql="INSERT INTO checklistcheck_item VALUES ('','$factoryname','$name','$item','$yes_no','$comments',CURDATE(),CURTIME())";
				//echo $factoryname;
//				}
//				$query=$this->db->query($sql);
//				return true;
				//$name=$data["name"];
				//echo "ok";
//				$stg = implode($name); 
//echo $stg; 
 $cdate = date("Y-m-d", strtotime($data['cdate']));
				$sql="INSERT INTO checklistcheck_item VALUES ('','$data[factoryname]','$data[name]','$data[item]','$data[yes_no]','$data[comments]','$cdate',CURTIME())";
				$query=$this->db->query($sql);
				return true;
			
	}
	public function checklisttinfo_show($factoryname,$checklistserial)
	{
		$query="SELECT * FROM checklist_item 
		JOIN checklist_serial_insert ON
		checklist_serial_insert.csid=checklist_item.checkserial
		WHERE factoryname='$factoryname' AND checkserial='$checklistserial' ORDER BY checkid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function checklist_report($factoryname,$adate)
	{
		$adate = date("Y-m-d", strtotime($adate));  
		$query="SELECT * FROM checklistcheck_item WHERE factoryname='$factoryname' AND cdate='$adate'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function eventalbum_insert($data)
	{
		
		$sql="INSERT INTO eventalbum_insert VALUES ('','$data[eventname]','$data[pic_file]','$data[edate]')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	//public function event_list()
//	{
//		$query="SELECT DISTINCT(eventname) AS eventname FROM eventalbum_insert ORDER BY edate DESC";
//		$result=$this->db->query($query);
//		return $result->result_array();
//		
//	}
	public function event_list()
	{
		$query="SELECT * FROM eventalbum_insert GROUP BY eventname,edate ORDER BY edate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function event_list_show($eventname)
	{
		$query="SELECT * FROM eventalbum_insert WHERE eventname='$eventname' ORDER BY edate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	
	
	
}

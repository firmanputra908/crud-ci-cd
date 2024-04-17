<?php
class Salestable_model extends CI_Model{
    
  function get_salestable($rowSALESID, $rowperpage, $search=""){
    $this->db->select('*');
    $this->db->from('salestable');

    if ($search != '') {
      $this->db->like('SALESID', $search);
      $this->db->or_like('SALESNAME', $search);
      $this->db->or_like('PURCHORDERFORMNUM', $search);
      $this->db->or_like('CUSTGROUP', $search);
      $this->db->or_like('CUSTOMERREF', $search);
      $this->db->or_like('SALESPOOLID', $search);
      $this->db->or_like('POSTINGPROFILE', $search);
      $this->db->or_like('RECID', $search);
  }

    $result = $this->db->limit($rowperpage, $rowSALESID)->get();
    return $result;
}
    
    function save($SALESID,$SALESNAME,$PURCHORDERFORMNUM,$CUSTGROUP,$CUSTOMERREF,$SALESPOOLID,$POSTINGPROFILE,$RECID){
      $data = array ('SALESID'=>$SALESID,'SALESNAME'=> $SALESNAME, 'PURCHORDERFORMNUM'=>$PURCHORDERFORMNUM, 'CUSTGROUP'=>$CUSTGROUP ,'CUSTOMERREF'=>$CUSTOMERREF,'SALESPOOLID'=>$SALESPOOLID, 'POSTINGPROFILE'=>$POSTINGPROFILE,'RECID'=>$RECID);
      $this->db->insert('salestable',$data);


	}
	function get_salestable_id($SALESID){
    	$query = $this->db->get_where('salestable',array('SALESID' => $SALESID));

    	return  $query;

    }

    function get_salestable_count($search = '') {       
        
      $this->db->select('*');
     $this->db->from('salestable');

     if ($search != '') {
      $this->db->like('SALESID', $search);
      $this->db->or_like('SALESNAME', $search);
      $this->db->or_like('PURCHORDERFORMNUM', $search);
      $this->db->or_like('CUSTGROUP', $search);
      $this->db->or_like('CUSTOMERREF', $search);
      $this->db->or_like('SALESPOOLID', $search);
      $this->db->or_like('POSTINGPROFILE', $search);
      $this->db->or_like('RECID', $search);
     }
     
     $result =  $this->db->count_all_results();

     return $result;
 }

    function update($SALESID, $SALESNAME, $PURCHORDERFORMNUM, $CUSTGROUP, $CUSTOMERREF,$SALESPOOLID,$POSTINGPROFILE,$RECID){
      $data = array(
        'SALESID' => $SALESID,
        'SALESNAME'=> $SALESNAME,
        'PURCHORDERFORMNUM'=> $PURCHORDERFORMNUM,
        'CUSTGROUP'=> $CUSTGROUP,
        'CUSTOMERREF'=> $CUSTOMERREF,
        'SALESPOOLID	'=> $SALESPOOLID	,
        'POSTINGPROFILE'=> $POSTINGPROFILE,
        'RECID'=> $RECID,
      );
      $this->db->where('SALESID',$SALESID);
      $this->db->update('salestable',$data);
    }

    function delete($SALESID) {
        $this->db->where('SALESID', $SALESID);
        $this->db->delete('salestable');
    }    
}
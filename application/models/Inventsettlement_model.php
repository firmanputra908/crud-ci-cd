<?php
class Inventsettlement_model extends CI_Model{
    
  function get_inventsettlement($rowRECID, $rowperpage, $search=""){
    $this->db->select('*');
    $this->db->from('inventsettlement');

    if ($search != '') {
      $this->db->like('RECID', $search);
      $this->db->or_like('TRANSRECID', $search);
      $this->db->or_like('INVENTTRANSID', $search);
      $this->db->or_like('ITEMID', $search);
      $this->db->or_like('VOUCHER', $search);
      $this->db->or_like('SETTLETRANSID', $search);
      $this->db->or_like('COSTAMOUNTSETTLED', $search);
  }

    $result = $this->db->limit($rowperpage, $rowRECID)->get();
    return $result;
}
    
    function save($RECID,$TRANSRECID,$INVENTTRANSID,$ITEMID,$VOUCHER,$SETTLETRANSID,$COSTAMOUNTSETTLED){
      $data = array ('RECID'=>$RECID,'TRANSRECID'=> $TRANSRECID, 'INVENTTRANSID'=>$INVENTTRANSID, 'ITEMID'=>$ITEMID ,'VOUCHER'=>$VOUCHER,'SETTLETRANSID'=>$SETTLETRANSID, 'COSTAMOUNTSETTLED'=>$COSTAMOUNTSETTLED);
      $this->db->insert('inventsettlement',$data);


	}
	function get_inventsettlement_id($RECID){
    	$query = $this->db->get_where('inventsettlement',array('RECID' => $RECID));

    	return  $query;

    }

    function get_inventsettlement_count($search = '') {       
        
      $this->db->select('*');
     $this->db->from('inventsettlement');

     if ($search != '') {
      $this->db->like('RECID', $search);
      $this->db->or_like('TRANSRECID', $search);
      $this->db->or_like('INVENTTRANSID', $search);
      $this->db->or_like('ITEMID', $search);
      $this->db->or_like('VOUCHER', $search);
      $this->db->or_like('SETTLETRANSID', $search);
      $this->db->or_like('COSTAMOUNTSETTLED', $search);
     }
     
     $result =  $this->db->count_all_results();

     return $result;
 }

    function update($RECID, $TRANSRECID, $INVENTTRANSID, $ITEMID, $VOUCHER,$SETTLETRANSID,$COSTAMOUNTSETTLED){
      $data = array(
        'RECID' => $RECID,
        'TRANSRECID'=> $TRANSRECID,
        'INVENTTRANSID'=> $INVENTTRANSID,
        'ITEMID'=> $ITEMID,
        'VOUCHER'=> $VOUCHER,
        'SETTLETRANSID	'=> $SETTLETRANSID	,
        'COSTAMOUNTSETTLED'=> $COSTAMOUNTSETTLED

      );
      $this->db->where('RECID',$RECID);
      $this->db->update('inventsettlement',$data);
    }

    function delete($RECID) {
        $this->db->where('RECID', $RECID);
        $this->db->delete('inventsettlement');
    }    
}
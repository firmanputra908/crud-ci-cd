<?php
class Transactionlog_model extends CI_Model{
    
  function get_transactionlog($rowCREATEDTRANSACTIONID, $rowperpage, $search=""){
    $this->db->select('*');
    $this->db->from('transactionlog');

    if ($search != '') {
      $this->db->like('CREATEDTRANSACTIONID', $search);
      $this->db->or_like('TXT', $search);
      $this->db->or_like('TYPE', $search);
      $this->db->or_like('CREATEDDATETIME', $search);
      $this->db->or_like('DEL_CREATEDTIME', $search);
      $this->db->or_like('CREATEDBY', $search);
      $this->db->or_like('RECID', $search);
  }

    $result = $this->db->limit($rowperpage, $rowCREATEDTRANSACTIONID)->get();
    return $result;
}
    
    function save($CREATEDTRANSACTIONID,$TXT,$TYPE,$CREATEDDATETIME,$DEL_CREATEDTIME,$CREATEDBY,$RECID){
      $data = array ('CREATEDTRANSACTIONID'=>$CREATEDTRANSACTIONID,'TXT'=> $TXT, 'TYPE'=>$TYPE, 'CREATEDDATETIME'=>$CREATEDDATETIME ,'DEL_CREATEDTIME'=>$DEL_CREATEDTIME,'CREATEDBY'=>$CREATEDBY, 'RECID'=>$RECID);
      $this->db->insert('transactionlog',$data);


	}
	function get_transactionlog_id($CREATEDTRANSACTIONID){
    	$query = $this->db->get_where('transactionlog',array('CREATEDTRANSACTIONID' => $CREATEDTRANSACTIONID));

    	return  $query;

    }

    function get_transactionlog_count($search = '') {       
        
      $this->db->select('*');
     $this->db->from('transactionlog');

     if ($search != '') {
      $this->db->like('CREATEDTRANSACTIONID', $search);
      $this->db->or_like('TXT', $search);
      $this->db->or_like('TYPE', $search);
      $this->db->or_like('CREATEDDATETIME', $search);
      $this->db->or_like('DEL_CREATEDTIME', $search);
      $this->db->or_like('CREATEDBY', $search);
      $this->db->or_like('RECID', $search);
     }
     
     $result =  $this->db->count_all_results();

     return $result;
 }

    function update($CREATEDTRANSACTIONID, $TXT, $TYPE, $CREATEDDATETIME, $DEL_CREATEDTIME,$CREATEDBY,$RECID){
      $data = array(
        'CREATEDTRANSACTIONID' => $CREATEDTRANSACTIONID,
        'TXT'=> $TXT,
        'TYPE'=> $TYPE,
        'CREATEDDATETIME'=> $CREATEDDATETIME,
        'DEL_CREATEDTIME'=> $DEL_CREATEDTIME,
        'CREATEDBY	'=> $CREATEDBY	,
        'RECID'=> $RECID

      );
      $this->db->where('CREATEDTRANSACTIONID',$CREATEDTRANSACTIONID);
      $this->db->update('transactionlog',$data);
    }

    function delete($CREATEDTRANSACTIONID) {
        $this->db->where('CREATEDTRANSACTIONID', $CREATEDTRANSACTIONID);
        $this->db->delete('transactionlog');
    }    
}
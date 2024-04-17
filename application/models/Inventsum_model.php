<?php
class Inventsum_model extends CI_Model{
    
  function get_inventsum($rowRECID, $rowperpage, $search=""){
    $this->db->select('*');
    $this->db->from('inventsum');

    if ($search != '') {
      $this->db->like('RECID', $search);
      $this->db->or_like('ITEMID', $search);
      $this->db->or_like('INVENTDIMID', $search);
      $this->db->or_like('CLOSED', $search);
      $this->db->or_like('AVAILORDERED', $search);
      $this->db->or_like('AVAILPHYSICAL', $search);
      $this->db->or_like('RECVERSION', $search);
  }

    $result = $this->db->limit($rowperpage, $rowRECID)->get();
    return $result;
}
    
    function save($RECID,$ITEMID,$INVENTDIMID,$CLOSED,$AVAILORDERED,$AVAILPHYSICAL,$RECVERSION){
      $data = array ('RECID'=>$RECID,'ITEMID'=> $ITEMID, 'INVENTDIMID'=>$INVENTDIMID, 'CLOSED'=>$CLOSED ,'AVAILORDERED'=>$AVAILORDERED,'AVAILPHYSICAL'=>$AVAILPHYSICAL, 'RECVERSION'=>$RECVERSION);
      $this->db->insert('inventsum',$data);


	}
	function get_inventsum_id($RECID){
    	$query = $this->db->get_where('inventsum',array('RECID' => $RECID));

    	return  $query;

    }

    function get_inventsum_count($search = '') {       
        
      $this->db->select('*');
     $this->db->from('inventsum');

     if ($search != '') {
      $this->db->like('RECID', $search);
      $this->db->or_like('ITEMID', $search);
      $this->db->or_like('INVENTDIMID', $search);
      $this->db->or_like('CLOSED', $search);
      $this->db->or_like('AVAILORDERED', $search);
      $this->db->or_like('AVAILPHYSICAL', $search);
      $this->db->or_like('RECVERSION', $search);
     }
     
     $result =  $this->db->count_all_results();

     return $result;
 }

    function update($RECID, $ITEMID, $INVENTDIMID, $CLOSED, $AVAILORDERED,$AVAILPHYSICAL,$RECVERSION){
      $data = array(
        'RECID' => $RECID,
        'ITEMID'=> $ITEMID,
        'INVENTDIMID'=> $INVENTDIMID,
        'CLOSED'=> $CLOSED,
        'AVAILORDERED'=> $AVAILORDERED,
        'AVAILPHYSICAL	'=> $AVAILPHYSICAL	,
        'RECVERSION'=> $RECVERSION

      );
      $this->db->where('RECID',$RECID);
      $this->db->update('inventsum',$data);
    }

    function delete($RECID) {
        $this->db->where('RECID', $RECID);
        $this->db->delete('inventsum');
    }    
}
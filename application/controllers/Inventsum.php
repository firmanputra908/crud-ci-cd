<?php
class Inventsum extends CI_Controller{
    
    function __construct(){
        parent::__construct();  
        $this->load->model('inventsum_model');
    }
    
    function index($row_RECID = 0){

      //search text
      $search_text = "";
        if ($this->input->post('submit') != NULL) {
            $search_text = $this->input->post('search');
            $this->session->set_userdata(array("search" => $search_text));
        } else {
            if ($this->session->userdata('search') != NULL) {
                $search_text = $this->session->userdata('search');
            }
        }

      // Row per page
      $row_per_page = 5;

      // Row position
      if ($row_RECID != 0) {
          $row_RECID = ($row_RECID - 1) * $row_per_page;
      }
      
      
      // Pagination Configuration
      // All records count
      $config['total_rows'] = $this->inventsum_model->get_inventsum_count($search_text);
      $config['base_url'] = base_url() . 'index.php/inventsum/index';
      $config['use_page_numbers'] = TRUE;
      $config['per_page'] = $row_per_page;


      //boostrap 4 for pagination
      $config['first_link']   = 'First';
      $config['last_link']   = 'Last';
      $config['prev_link']   = 'Prev';
      $config['next_link']   = 'Next';
      $config['full_tag_open']   = '<div class="pagging text-center"><nav><ul class="pagination">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']   = '<li class="page-items"><span class="page-link">';
      $config['num_tag_close']   = '</span></li>';
      $config['cur_tag_open']   = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['next_tag1_close']   = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['prev_tag1_close']   ='</span> Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tag1_close']   ='</span></li>';
      $config['last_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['last_tag1_close']   = '</span></li>';
       
      
      // Initialize
      $this->pagination->initialize($config);
      
      $data['pagination'] = $this->pagination->create_links();
      
      // Get  records
      $data['inventsum'] = $this->inventsum_model->get_inventsum($row_RECID, $row_per_page,$search_text);

      $data['row'] = $row_RECID;
      $data['search'] = $search_text;
      
      $this->load->view('inventsum/inventsum_view.php', $data);  
  }
    
      function add_new(){
      $this->load->view('inventsum/add_inventsum_view');
    }
  
    function save(){
      $RECID = $this->input->post('RECID');
      $ITEMID = $this->input->post('ITEMID');
      $INVENTDIMID = $this->input->post('INVENTDIMID');
      $CLOSED= $this->input->post('CLOSED');
      $AVAILORDERED = $this->input->post('AVAILORDERED');
      $AVAILPHYSICAL = $this->input->post('AVAILPHYSICAL');
      $RECVERSION = $this->input->post('RECVERSION');
      $this->inventsum_model->save($RECID,$ITEMID,$INVENTDIMID,$CLOSED,$AVAILORDERED,$AVAILPHYSICAL,$RECVERSION);
      redirect('inventsum');
    }
    function get_edit(){
      $RECID = $this->uri->segment(3);
      $result = $this->inventsum_model->get_inventsum_id($RECID);
      if ($result->num_rows() > 0) {
          $i =$result->row_array();
          $data = array(
            'RECID' => $i['RECID'],
            'ITEMID' => $i['ITEMID'],
            'INVENTDIMID' => $i['INVENTDIMID'],
            'CLOSED' => $i['CLOSED'],
            'AVAILORDERED' => $i['AVAILORDERED'],
            'AVAILPHYSICAL' => $i['AVAILPHYSICAL'],
            'RECVERSION' => $i['RECVERSION'],
          );
          $this->load->view('inventsum/edit_inventsum_view',$data);
        }else{
          echo "Data wasn't found";
        }
    }


    function update(){
      $RECID = $this->input->post('RECID');
      $ITEMID = $this->input->post('ITEMID');
      $INVENTDIMID= $this->input->post('INVENTDIMID');
      $CLOSED= $this->input->post('CLOSED');
      $AVAILORDERED= $this->input->post('AVAILORDERED');
      $AVAILPHYSICAL= $this->input->post('AVAILPHYSICAL');
      $RECVERSION= $this->input->post('RECVERSION');
      $this->inventsum_model->update($RECID,$ITEMID, $INVENTDIMID, $CLOSED,$AVAILORDERED,$AVAILPHYSICAL,$RECVERSION);
      redirect('inventsum');
    }

    function get_delete() {
          $RECID = $this->uri->segment(3);
          $result = $this->inventsum_model->get_inventsum_id($RECID);
          if ($result->num_rows() > 0){
              $i = $result->row_array();
              $data = array(
                  'RECID' => $i['RECID'],
                  'ITEMID' => $i['ITEMID'],
                  'INVENTDIMID ' => $i['INVENTDIMID'],
                  'CLOSED' => $i['CLOSED'],
                  'AVAILORDERED' => $i['AVAILORDERED'],
                  'AVAILPHYSICAL' => $i['AVAILPHYSICAL'],
                  'RECVERSION' => $i['RECVERSION'],
              );
              $this->load->view('inventsum/delete_inventsum_view', $data);
          } else {
              echo "Data Wasn't Found";
          }
      }

      function delete(){
          $RECID = $this->uri->segment(3);
          $this->inventsum_model->delete($RECID);

          redirect('inventsum');
      }  
    }


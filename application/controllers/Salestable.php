<?php
class Salestable extends CI_Controller{
    
    function __construct(){
        parent::__construct();  
        $this->load->model('salestable_model');
    }
    
    function index($row_SALESID = 0){

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
      if ($row_SALESID != 0) {
          $row_SALESID = ($row_SALESID - 1) * $row_per_page;
      }
      
      
      // Pagination Configuration
      // All records count
      $config['total_rows'] = $this->salestable_model->get_salestable_count($search_text);
      $config['base_url'] = base_url() . 'index.php/salestable/index';
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
      $data['salestable'] = $this->salestable_model->get_salestable($row_SALESID, $row_per_page,$search_text);

      $data['row'] = $row_SALESID;
      $data['search'] = $search_text;
      
      $this->load->view('salestable/salestable_view.php', $data);  
  }
    
      function add_new(){
      $this->load->view('salestable/add_salestable_view');
    }
  
    function save(){
      $SALESID = $this->input->post('SALESID');
      $SALESNAME = $this->input->post('SALESNAME');
      $PURCHORDERFORMNUM = $this->input->post('PURCHORDERFORMNUM');
      $CUSTGROUP= $this->input->post('CUSTGROUP');
      $CUSTOMERREF = $this->input->post('CUSTOMERREF');
      $SALESPOOLID = $this->input->post('SALESPOOLID');
      $POSTINGPROFILE = $this->input->post('POSTINGPROFILE');
      $RECID = $this->input->post('RECID');
      $this->salestable_model->save($SALESID,$SALESNAME,$PURCHORDERFORMNUM,$CUSTGROUP,$CUSTOMERREF,$SALESPOOLID,$POSTINGPROFILE,$RECID);
      redirect('salestable');
    }
    function get_edit(){
      $SALESID = $this->uri->segment(3);
      $result = $this->salestable_model->get_salestable_id($SALESID);
      if ($result->num_rows() > 0) {
          $i =$result->row_array();
          $data = array(
            'SALESID' => $i['SALESID'],
            'SALESNAME' => $i['SALESNAME'],
            'PURCHORDERFORMNUM' => $i['PURCHORDERFORMNUM'],
            'CUSTGROUP' => $i['CUSTGROUP'],
            'CUSTOMERREF' => $i['CUSTOMERREF'],
            'SALESPOOLID' => $i['SALESPOOLID'],
            'POSTINGPROFILE' => $i['POSTINGPROFILE'],
            'RECID' => $i['RECID'],
          );
          $this->load->view('salestable/edit_salestable_view',$data);
        }else{
          echo "Data wasn't found";
        }
    }


    function update(){
      $SALESID = $this->input->post('SALESID');
      $SALESNAME = $this->input->post('SALESNAME');
      $PURCHORDERFORMNUM= $this->input->post('PURCHORDERFORMNUM');
      $CUSTGROUP= $this->input->post('CUSTGROUP');
      $CUSTOMERREF= $this->input->post('CUSTOMERREF');
      $SALESPOOLID= $this->input->post('SALESPOOLID');
      $POSTINGPROFILE= $this->input->post('POSTINGPROFILE');
      $RECID= $this->input->post('RECID');
      $this->salestable_model->update($SALESID,$SALESNAME, $PURCHORDERFORMNUM, $CUSTGROUP,$CUSTOMERREF,$SALESPOOLID,$POSTINGPROFILE,$RECID);
      redirect('salestable');
    }

    function get_delete() {
          $SALESID = $this->uri->segment(3);
          $result = $this->salestable_model->get_salestable_id($SALESID);
          if ($result->num_rows() > 0){
              $i = $result->row_array();
              $data = array(
                  'SALESID' => $i['SALESID'],
                  'SALESNAME' => $i['SALESNAME'],
                  'PURCHORDERFORMNUM ' => $i['PURCHORDERFORMNUM'],
                  'CUSTGROUP' => $i['CUSTGROUP'],
                  'CUSTOMERREF' => $i['CUSTOMERREF'],
                  'SALESPOOLID' => $i['SALESPOOLID'],
                  'POSTINGPROFILE' => $i['POSTINGPROFILE'],
                  'RECID' => $i['RECID'],
              );
              $this->load->view('salestable/delete_salestable_view', $data);
          } else {
              echo "Data Wasn't Found";
          }
      }

      function delete(){
          $SALESID = $this->uri->segment(3);
          $this->salestable_model->delete($SALESID);

          redirect('salestable');
      }  
    }


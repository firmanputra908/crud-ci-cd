<?php
class Inventsettlement extends CI_Controller{
    
    function __construct(){
        parent::__construct();  
        $this->load->model('inventsettlement_model');
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
      $config['total_rows'] = $this->inventsettlement_model->get_inventsettlement_count($search_text);
      $config['base_url'] = base_url() . 'index.php/inventsettlement/index';
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
      $data['inventsettlement'] = $this->inventsettlement_model->get_inventsettlement($row_RECID, $row_per_page,$search_text);

      $data['row'] = $row_RECID;
      $data['search'] = $search_text;
      
      $this->load->view('inventsettlement/inventsettlement_view.php', $data);  
  }
    
      function add_new(){
      $this->load->view('inventsettlement/add_inventsettlement_view');
    }
  
    function save(){
      $RECID = $this->input->post('RECID');
      $TRANSRECID = $this->input->post('TRANSRECID');
      $INVENTTRANSID = $this->input->post('INVENTTRANSID');
      $ITEMID= $this->input->post('ITEMID');
      $VOUCHER = $this->input->post('VOUCHER');
      $SETTLETRANSID = $this->input->post('SETTLETRANSID');
      $COSTAMOUNTSETTLED = $this->input->post('COSTAMOUNTSETTLED');
      $this->inventsettlement_model->save($RECID,$TRANSRECID,$INVENTTRANSID,$ITEMID,$VOUCHER,$SETTLETRANSID,$COSTAMOUNTSETTLED);
      redirect('inventsettlement');
    }
    function get_edit(){
      $RECID = $this->uri->segment(3);
      $result = $this->inventsettlement_model->get_inventsettlement_id($RECID);
      if ($result->num_rows() > 0) {
          $i =$result->row_array();
          $data = array(
            'RECID' => $i['RECID'],
            'TRANSRECID' => $i['TRANSRECID'],
            'INVENTTRANSID' => $i['INVENTTRANSID'],
            'ITEMID' => $i['ITEMID'],
            'VOUCHER' => $i['VOUCHER'],
            'SETTLETRANSID' => $i['SETTLETRANSID'],
            'COSTAMOUNTSETTLED' => $i['COSTAMOUNTSETTLED'],
          );
          $this->load->view('inventsettlement/edit_inventsettlement_view',$data);
        }else{
          echo "Data wasn't found";
        }
    }


    function update(){
      $RECID = $this->input->post('RECID');
      $TRANSRECID = $this->input->post('TRANSRECID');
      $INVENTTRANSID= $this->input->post('INVENTTRANSID');
      $ITEMID= $this->input->post('ITEMID');
      $VOUCHER= $this->input->post('VOUCHER');
      $SETTLETRANSID= $this->input->post('SETTLETRANSID');
      $COSTAMOUNTSETTLED= $this->input->post('COSTAMOUNTSETTLED');
      $this->inventsettlement_model->update($RECID,$TRANSRECID, $INVENTTRANSID, $ITEMID,$VOUCHER,$SETTLETRANSID,$COSTAMOUNTSETTLED);
      redirect('inventsettlement');
    }

    function get_delete() {
          $RECID = $this->uri->segment(3);
          $result = $this->inventsettlement_model->get_inventsettlement_id($RECID);
          if ($result->num_rows() > 0){
              $i = $result->row_array();
              $data = array(
                  'RECID' => $i['RECID'],
                  'TRANSRECID' => $i['TRANSRECID'],
                  'INVENTTRANSID ' => $i['INVENTTRANSID'],
                  'ITEMID' => $i['ITEMID'],
                  'VOUCHER' => $i['VOUCHER'],
                  'SETTLETRANSID' => $i['SETTLETRANSID'],
                  'COSTAMOUNTSETTLED' => $i['COSTAMOUNTSETTLED'],
              );
              $this->load->view('inventsettlement/delete_inventsettlement_view', $data);
          } else {
              echo "Data Wasn't Found";
          }
      }

      function delete(){
          $RECID = $this->uri->segment(3);
          $this->inventsettlement_model->delete($RECID);

          redirect('inventsettlement');
      }  
    }


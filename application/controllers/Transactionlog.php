
<?php
class Transactionlog extends CI_Controller{
    
    function __construct(){
        parent::__construct();  
        $this->load->model('transactionlog_model');
    }
    
    function index($row_CREATEDTRANSACTIONID = 0){

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
      if ($row_CREATEDTRANSACTIONID != 0) {
          $row_CREATEDTRANSACTIONID = ($row_CREATEDTRANSACTIONID - 1) * $row_per_page;
      }
      
      
      // Pagination Configuration
      // All records count
      $config['total_rows'] = $this->transactionlog_model->get_transactionlog_count($search_text);
      $config['base_url'] = base_url() . 'index.php/transactionlog/index';
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
      $data['transactionlog'] = $this->transactionlog_model->get_transactionlog($row_CREATEDTRANSACTIONID, $row_per_page,$search_text);

      $data['row'] = $row_CREATEDTRANSACTIONID;
      $data['search'] = $search_text;
      
      $this->load->view('transactionlog/transactionlog_view.php', $data);  
  }
    
      function add_new(){
      $this->load->view('transactionlog/add_transactionlog_view');
    }
  
    function save(){
      $CREATEDTRANSACTIONID = $this->input->post('CREATEDTRANSACTIONID');
      $TXT = $this->input->post('TXT');
      $TYPE = $this->input->post('TYPE');
      $CREATEDDATETIME= $this->input->post('CREATEDDATETIME');
      $DEL_CREATEDTIME = $this->input->post('DEL_CREATEDTIME');
      $CREATEDBY = $this->input->post('CREATEDBY');
      $RECID = $this->input->post('RECID');
      $this->transactionlog_model->save($CREATEDTRANSACTIONID,$TXT,$TYPE,$CREATEDDATETIME,$DEL_CREATEDTIME,$CREATEDBY,$RECID);
      redirect('transactionlog');
    }
    function get_edit(){
      $CREATEDTRANSACTIONID = $this->uri->segment(3);
      $result = $this->transactionlog_model->get_transactionlog_id($CREATEDTRANSACTIONID);
      if ($result->num_rows() > 0) {
          $i =$result->row_array();
          $data = array(
            'CREATEDTRANSACTIONID' => $i['CREATEDTRANSACTIONID'],
            'TXT' => $i['TXT'],
            'TYPE' => $i['TYPE'],
            'CREATEDDATETIME' => $i['CREATEDDATETIME'],
            'DEL_CREATEDTIME' => $i['DEL_CREATEDTIME'],
            'CREATEDBY' => $i['CREATEDBY'],
            'RECID' => $i['RECID'],
          );
          $this->load->view('transactionlog/edit_transactionlog_view',$data);
        }else{
          echo "Data wasn't found";
        }
    }


    function update(){
      $CREATEDTRANSACTIONID = $this->input->post('CREATEDTRANSACTIONID');
      $TXT = $this->input->post('TXT');
      $TYPE= $this->input->post('TYPE');
      $CREATEDDATETIME= $this->input->post('CREATEDDATETIME');
      $DEL_CREATEDTIME= $this->input->post('DEL_CREATEDTIME');
      $CREATEDBY= $this->input->post('CREATEDBY');
      $RECID= $this->input->post('RECID');
      $this->transactionlog_model->update($CREATEDTRANSACTIONID,$TXT, $TYPE, $CREATEDDATETIME,$DEL_CREATEDTIME,$CREATEDBY,$RECID);
      redirect('transactionlog');
    }

    function get_delete() {
          $CREATEDTRANSACTIONID = $this->uri->segment(3);
          $result = $this->transactionlog_model->get_transactionlog_id($CREATEDTRANSACTIONID);
          if ($result->num_rows() > 0){
              $i = $result->row_array();
              $data = array(
                  'CREATEDTRANSACTIONID' => $i['CREATEDTRANSACTIONID'],
                  'TXT' => $i['TXT'],
                  'TYPE ' => $i['TYPE'],
                  'CREATEDDATETIME' => $i['CREATEDDATETIME'],
                  'DEL_CREATEDTIME' => $i['DEL_CREATEDTIME'],
                  'CREATEDBY' => $i['CREATEDBY'],
                  'RECID' => $i['RECID'],
              );
              $this->load->view('transactionlog/delete_transactionlog_view', $data);
          } else {
              echo "Data Wasn't Found";
          }
      }

      function delete(){
          $CREATEDTRANSACTIONID = $this->uri->segment(3);
          $this->transactionlog_model->delete($CREATEDTRANSACTIONID);

          redirect('transactionlog');
      }  
    }


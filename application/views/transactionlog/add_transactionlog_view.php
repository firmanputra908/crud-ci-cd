<html>
  <head>    
    <title>Add New transactionlog</title>  
        <script src="<?= base_url()?>assets\jquery\jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets\bootstrap\css\bootstrap.min.css">
        <script src="<?=base_url() ?>assets\bootstrap\js\bootstrap.min.js"></script>
  </head>
  <body>   
      <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
          <a href="<?php echo site_url('home'); ?>" class="navbar-brand">MyProject</a>
          <button class="navbar-toggler" data-toggle="collapse" 
                  data-target="#collapsibleNavbar" type="button">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collape navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav mr-auto">
                      <li class="nav-item ">
                        <a href="<?php echo site_url('transactionlog'); ?> " class="nav-link">transactionlog</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('inventsum');?>" class="nav-link">inventsum</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('salestable');?>" class="nav-link">salestable</a>
                      </li>
                    <li>
                        <a href="<?php echo site_url('inventsettlement');?>" class="nav-link">inventsettlement</a>
                    </li>
              </ul>
          </div>
      </nav>  
      <h1 class="pt-5"><center>Add New transactionlog</center></h1>
      <div class="container">
        <form action="<?php echo site_url('transactionlog/save');?>" method="post">
          <div class="form-group">
            <label> CREATEDTRANSACTIONID</label>
            <input type="text" class="form-control" name="CREATEDTRANSACTIONID" placeholder="input CREATEDTRANSACTIONID">
          </div>
          <div >
          <div class="form-group">
            <label>TXT</label>
            <input type="text" class="form-control" name="TXT" placeholder="input TXT">
          </div>
          <div class="form-group">
            <label>TYPE</label>
            <input type="text" class="form-control" name="TYPE" placeholder="input TYPE">
          </div>
          <div class="form-group">
            <label>CREATEDDATETIME</label>
            <input type="text" class="form-control" name="CREATEDDATETIME" placeholder="input CREATEDDATETIME">
          </div>
          <div class="form-group">
            <label>DEL_CREATEDTIME</label>
            <input type="text" class="form-control" name="DEL_CREATEDTIME" placeholder="input DEL_CREATEDTIME">
          </div>
          <div class="form-group">
            <label>CREATEDBY</label>
            <input type="text" class="form-control" name="CREATEDBY" placeholder="input CREATEDBY">
          </div>
          <div class="form-group">
            <label>RECID</label>
            <input type="text" class="form-control" name="RECID" placeholder="input RECID">
          </div>
          <div >
          <button type="submit" class="btn btn-secondary">Submit</button>
          <a href="<?php echo site_url('transactionlog/index');?>" class="btn btn-primary">Kembali</a>
        </form>
    </div>   

  </body>
</html>

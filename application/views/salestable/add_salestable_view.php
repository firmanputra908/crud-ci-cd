<html>
  <head>    
    <title>Add New salestable</title>  
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
      <h1 class="pt-5"><center>Add New salestable</center></h1>
      <div class="container">
        <form action="<?php echo site_url('salestable/save');?>" method="post" >
          <div class="form-group">
            <label> SALESID</label>
            <input type="text" class="form-control" name="SALESID" placeholder="input SALESID">
          </div>
          <div >
          <div class="form-group">
            <label>SALESNAME</label>
            <input type="text" class="form-control" name="SALESNAME" placeholder="input SALESNAME">
          </div>
          <div class="form-group">
            <label>PURCHORDERFORMNUM</label>
            <input type="text" class="form-control" name="PURCHORDERFORMNUM" placeholder="input PURCHORDERFORMNUM">
          </div>
          <div class="form-group">
            <label>CUSTGROUP</label>
            <input type="text" class="form-control" name="CUSTGROUP" placeholder="input CUSTGROUP">
          </div>
          <div class="form-group">
            <label>CUSTOMERREF</label>
            <input type="text" class="form-control" name="CUSTOMERREF" placeholder="input CUSTOMERREF">
          </div>
          <div class="form-group">
            <label>SALESPOOLID</label>
            <input type="text" class="form-control" name="SALESPOOLID" placeholder="input SALESPOOLID">
          </div>
          <div class="form-group">
            <label>POSTINGPROFILE</label>
            <input type="text" class="form-control" name="POSTINGPROFILE" placeholder="input POSTINGPROFILE">
          </div>
          <div class="form-group">
            <label>RECID</label>
            <input type="text" class="form-control" name="RECID" placeholder="input RECID">
          </div>
          <div >
          <button type="submit" class="btn btn-secondary">Submit</button>
          <a href="<?php echo site_url('salestable/index');?>" class="btn btn-primary">Kembali</a>
        </form>
    </div>   

  </body>
</html>

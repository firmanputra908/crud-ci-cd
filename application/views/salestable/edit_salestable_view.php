<html>
  <head>    
    <title>update salestable</title>  
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
      <div class="container">
      <h1><center>Update salestable</center></h1>
        <form action="<?php echo site_url('salestable/update');?>" method="post">
          <div class="form-group">
            <label>SALESID</label>
            <input type="text" class="form-control" name="SALESID" value="<?php echo $SALESID;?>" placeholder="input SALESID">
          </div>

          <div class="form-group">
            <label>SALESNAME</label>
            <input type="text" class="form-control" name="SALESNAME" value="<?php echo $SALESNAME;?>" placeholder="input SALESNAME">
          </div>

          <div class="form-group">
            <label>PURCHORDERFORMNUM</label>
            <input type="text"class="form-control " name="PURCHORDERFORMNUM" value="<?php echo $PURCHORDERFORMNUM;?>" placeholder="PURCHORDERFORMNUM">
          </div>

          <div class="form-group">
            <label>CUSTGROUP</label>
            <input type="text" class="form-control" name="CUSTGROUP" value="<?php echo $CUSTGROUP;?>" placeholder="CUSTGROUP">
          </div>
          <div class="form-group">
            <label>CUSTOMERREF</label>
            <input type="text" class="form-control" name="CUSTOMERREF" value="<?php echo $CUSTOMERREF;?>" placeholder="CUSTOMERREF">
          </div>
          <div class="form-group">
            <label>SALESPOOLID</label>
            <input type="text" class="form-control" name="SALESPOOLID" value="<?php echo $SALESPOOLID;?>" placeholder="SALESPOOLID">
          </div>

          <div class="form-group">
            <label>POSTINGPROFILE</label>
            <input type="text" class="form-control" name="POSTINGPROFILE" value="<?php echo $POSTINGPROFILE;?>" placeholder="POSTINGPROFILE">
          </div>
          <div class="form-group">
            <label>RECID</label>
            <input type="text" class="form-control" name="RECID" value="<?php echo $RECID;?>" placeholder="RECID">
          </div>

          <input type="hidden" name="SALESID" value="<?php echo $SALESID;?>">
          <button type="submit" class="btn btn-secondary">Simpan</button>
        </form>
    </div>   

  </body>
</html>

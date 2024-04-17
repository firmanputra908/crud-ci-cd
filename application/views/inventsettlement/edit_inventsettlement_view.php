<html>
  <head>    
    <title>update inventsettlement</title>  
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
      <h1><center>Update inventsettlement</center></h1>
        <form action="<?php echo site_url('inventsettlement/update');?>" method="post">
          <div class="form-group">
            <label>RECID</label>
            <input type="text" class="form-control" name="RECID" value="<?php echo $RECID;?>" placeholder="input RECID">
          </div>

          <div class="form-group">
            <label>TRANSRECID</label>
            <input type="text" class="form-control" name="TRANSRECID" value="<?php echo $TRANSRECID;?>" placeholder="input TRANSRECID">
          </div>

          <div class="form-group">
            <label>INVENTTRANSID</label>
            <input type="text"class="form-control " name="INVENTTRANSID" value="<?php echo $INVENTTRANSID;?>" placeholder="INVENTTRANSID">
          </div>

          <div class="form-group">
            <label>ITEMID</label>
            <input type="text" class="form-control" name="ITEMID" value="<?php echo $ITEMID;?>" placeholder="ITEMID">
          </div>
          <div class="form-group">
            <label>VOUCHER</label>
            <input type="text" class="form-control" name="VOUCHER" value="<?php echo $VOUCHER;?>" placeholder="VOUCHER">
          </div>
          <div class="form-group">
            <label>SETTLETRANSID</label>
            <input type="text" class="form-control" name="SETTLETRANSID" value="<?php echo $SETTLETRANSID;?>" placeholder="SETTLETRANSID">
          </div>

          <div class="form-group">
            <label>COSTAMOUNTSETTLED</label>
            <input type="text" class="form-control" name="COSTAMOUNTSETTLED" value="<?php echo $COSTAMOUNTSETTLED;?>" placeholder="COSTAMOUNTSETTLED">
          </div>

          <input type="hidden" name="RECID" value="<?php echo $RECID;?>">
          <button type="submit" class="btn btn-secondary">Simpan</button>
        </form>
    </div>   

  </body>
</html>

<html>
  <head>    
    <title>update transactionlog</title>  
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
      <h1><center>Update transactionlog</center></h1>
        <form action="<?php echo site_url('transactionlog/update');?>" method="post">
          <div class="form-group">
            <label>CREATEDTRANSACTIONID</label>
            <input type="text" class="form-control" name="CREATEDTRANSACTIONID" value="<?php echo $CREATEDTRANSACTIONID;?>" placeholder="input CREATEDTRANSACTIONID">
          </div>

          <div class="form-group">
            <label>TXT</label>
            <input type="text" class="form-control" name="TXT" value="<?php echo $TXT;?>" placeholder="input TXT">
          </div>

          <div class="form-group">
            <label>TYPE</label>
            <input type="text"class="form-control " name="TYPE" value="<?php echo $TYPE;?>" placeholder="TYPE">
          </div>

          <div class="form-group">
            <label>CREATEDDATETIME</label>
            <input type="text" class="form-control" name="CREATEDDATETIME" value="<?php echo $CREATEDDATETIME;?>" placeholder="CREATEDDATETIME">
          </div>
          <div class="form-group">
            <label>DEL_CREATEDTIME</label>
            <input type="text" class="form-control" name="DEL_CREATEDTIME" value="<?php echo $DEL_CREATEDTIME;?>" placeholder="DEL_CREATEDTIME">
          </div>
          <div class="form-group">
            <label>CREATEDBY</label>
            <input type="text" class="form-control" name="CREATEDBY" value="<?php echo $CREATEDBY;?>" placeholder="CREATEDBY">
          </div>

          <div class="form-group">
            <label>RECID</label>
            <input type="text" class="form-control" name="RECID" value="<?php echo $RECID;?>" placeholder="RECID">
          </div>

          <input type="hidden" name="CREATEDTRANSACTIONID" value="<?php echo $CREATEDTRANSACTIONID;?>">
          <button type="submit" class="btn btn-secondary">Simpan</button>
        </form>
    </div>   

  </body>
</html>

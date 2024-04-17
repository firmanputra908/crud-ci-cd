<html>
  <head>    
    <title>update inventsum</title>  
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
      <h1><center>Update inventsum</center></h1>
        <form action="<?php echo site_url('inventsum/update');?>" method="post">
          <div class="form-group">
            <label>RECID</label>
            <input type="text" class="form-control" name="RECID" value="<?php echo $RECID;?>" placeholder="input RECID">
          </div>

          <div class="form-group">
            <label>ITEMID</label>
            <input type="text" class="form-control" name="ITEMID" value="<?php echo $ITEMID;?>" placeholder="input ITEMID">
          </div>

          <div class="form-group">
            <label>INVENTDIMID</label>
            <input type="text"class="form-control " name="INVENTDIMID" value="<?php echo $INVENTDIMID;?>" placeholder="INVENTDIMID">
          </div>

          <div class="form-group">
            <label>CLOSED</label>
            <input type="text" class="form-control" name="CLOSED" value="<?php echo $CLOSED;?>" placeholder="CLOSED">
          </div>
          <div class="form-group">
            <label>AVAILORDERED</label>
            <input type="text" class="form-control" name="AVAILORDERED" value="<?php echo $AVAILORDERED;?>" placeholder="AVAILORDERED">
          </div>
          <div class="form-group">
            <label>AVAILPHYSICAL</label>
            <input type="text" class="form-control" name="AVAILPHYSICAL" value="<?php echo $AVAILPHYSICAL;?>" placeholder="AVAILPHYSICAL">
          </div>

          <div class="form-group">
            <label>RECVERSION</label>
            <input type="text" class="form-control" name="RECVERSION" value="<?php echo $RECVERSION;?>" placeholder="RECVERSION">
          </div>

          <input type="hidden" name="RECID" value="<?php echo $RECID;?>">
          <button type="submit" class="btn btn-secondary">Simpan</button>
        </form>
    </div>   

  </body>
</html>

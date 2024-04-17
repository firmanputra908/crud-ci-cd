<html>
  <head>    
    <title>Add New inventsum</title>  
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
      <h1 class="pt-5"><center>Add New inventsum</center></h1>
      <div class="container">
        <form action="<?php echo site_url('inventsum/save');?>" method="post">
          <div class="form-group">
            <label> RECID</label>
            <input type="text" class="form-control" name="RECID" placeholder="input RECID">
          </div>
          <div >
          <div class="form-group">
            <label>ITEMID</label>
            <input type="text" class="form-control" name="ITEMID" placeholder="input ITEMID">
          </div>
          <div class="form-group">
            <label>INVENTDIMID</label>
            <input type="text" class="form-control" name="INVENTDIMID" placeholder="input INVENTDIMID">
          </div>
          <div class="form-group">
            <label>CLOSED</label>
            <input type="text" class="form-control" name="CLOSED" placeholder="input CLOSED">
          </div>
          <div class="form-group">
            <label>AVAILORDERED</label>
            <input type="text" class="form-control" name="AVAILORDERED" placeholder="input AVAILORDERED">
          </div>
          <div class="form-group">
            <label>AVAILPHYSICAL</label>
            <input type="text" class="form-control" name="AVAILPHYSICAL" placeholder="input AVAILPHYSICAL">
          </div>
          <div class="form-group">
            <label>RECVERSION</label>
            <input type="text" class="form-control" name="RECVERSION" placeholder="input RECVERSION">
          </div>
          <div >
          <button type="submit" class="btn btn-secondary">Submit</button>
          <a href="<?php echo site_url('inventsum/index');?>" class="btn btn-primary">Kembali</a>
        </form>
    </div>   

  </body>
</html>

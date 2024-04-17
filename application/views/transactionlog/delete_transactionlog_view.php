<html>
   <head>
      <title></title>
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
                     <<li class="nav-item ">
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
         <div class="container-fluid">
            <p><b>Klik Ok Untuk Menghapus <?php echo $CREATEDTRANSACTIONID?></b></p>
            <form action="<?php echo site_url('transactionlog/delete/' . $CREATEDTRANSACTIONID);?>">
               <button type="submit" class="btn btn-danger">OK</button>
            </form>
         </div> 
    </body>
</html>
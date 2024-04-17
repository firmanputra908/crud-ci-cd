<html>
    <head>
        <title>TAS</title>
        <script src="<?= base_url()?>assets\jquery\jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets\bootstrap\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets\bootstrap\css\bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark my-2">
            <a href="<?php echo site_url('home'); ?>" class="navbar-brand">Home</a>
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#collapsibleNavbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collape navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a href="<?php echo site_url('transactionlog'); ?> " class="nav-link">tastransactionlog</a>
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
        <div class="jumbotron jumbotron-fluid my-2">
            <h1 style="text-align:center">Dashboard </h1>
            <p style="text-align: center">Ini subtitle </p>
        </div>
        <div class="container"> 
            <div class="row">
                <div class="col-lg-3 mt-4 " style="text-align: center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-anchor">Transactionlog</i></h4>
                            <h6 class="card-subtitle mb-2 text-muted">the most presticious transaction in Indonesia</h6>
                            <p class="card-text">Merupakan interface yang terdiri dari add,update,delete,view </p>
                            <a href="<?php echo site_url('transactionlog'); ?> " class="btn btn-primary">Detail</a>                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4 " style="text-align: center">
                    <div class="card" >
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-archive">Inventsum</i></h4>
                            <h6 class="card-subtitle mb-2 text-muted">the most powerful inventory in the earth</h6>
                            <p class="card-text">Merupakan interface yang terdiri dari add,update,delete,view </p>
                            <a href="<?php echo site_url('inventsum') ;?>" class="btn btn-primary">Detail</a>                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4" style="text-align: center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">salestable</h4>
                            <h6 class="card-subtitle mb-2 text-muted">looking for our salestable?click the button below</h6>
                            <p class="card-text">Merupakan interface yang terdiri dari add,update,delete,view </p>
                            <a href="<?php echo site_url('salestable') ;?>" class="btn btn-primary">Detail</a>                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4" style="text-align: center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">inventsettlement</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Best way to get freedom on earth</h6>
                            <p class="card-text">Merupakan interface yang terdiri dari add,update,delete,view </p>
                            <a href="#" class="btn btn-primary">detail</a>                    
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </body>
</html>
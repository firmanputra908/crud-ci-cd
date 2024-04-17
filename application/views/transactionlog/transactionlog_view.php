<html>
    <head>
		<title>transactionlog List</title>
        <script src="<?= base_url()?>assets\jquery\jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets\bootstrap\css\bootstrap.min.css">
        <script src="<?= base_url() ?>assets\bootstrap\js\bootstrap.min.js"></script>
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
                <form class="form-inline my-2 my-lg-0" action="<?= base_url() ?>index.php/transactionlog/index" method="post">
                    <input type="text" class="form-control mr-sm-2" name="search" value="<?= $search ?>" placeholder="search">
                    <input type='submit' class="btn btn-primary my-2 my-sm-0" name='submit' value='Cari'>
                </form>
            </div>
        </nav>
        <div class="container pt-3">
            <h1><center>transactionlog List</center></h1>     
            <div class="p-3">
                <a href="<?php echo site_url('transactionlog/add_new');?>" class="btn btn-primary">Add transactionlog</a><br/>
            </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>CREATEDTRANSACTIONID</th>
                            <th>TXT</th>
                            <th>TYPE</th>
                            <th>CREATEDDATETIME</th>
                            <th>DEL_CREATEDTIME</th>
                            <th>CREATEDBY</th>
                            <th>RECID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = $row + 1;
                        foreach ($transactionlog->result() as $row) :
                        ?>
                        
                    <tr>
                        <th><?php echo $count;?></th>
                        <!-- <td><?php echo $row->CREATEDTRANSACTIONID;?></td> -->
                        <td><?php echo $row->TXT;?></td>
                        <td><?php echo $row->TYPE;?></td>
                        <td><?php echo $row->CREATEDDATETIME;?></td>
                        <td><?php echo $row->DEL_CREATEDTIME;?></td>
                        <td><?php echo $row->CREATEDBY;?></td>
                        <td><?php echo $row->RECID;?></td>
                        <td><a href="<?php echo site_url('transactionlog/get_edit/'.$row->CREATEDTRANSACTIONID);?>" class="btn btn-warning">Update</a></td>
                        <td><a href="<?php echo site_url('transactionlog/get_delete/'.$row->CREATEDTRANSACTIONID); ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                        <?php 
                        $count++;
                        endforeach;?>
                    </tbody>
                    
                </table>        
                <div >
                    <?= $pagination ?>
                </div>    
        </div>
    </body>
</html>
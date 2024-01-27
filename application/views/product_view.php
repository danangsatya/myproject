<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Product List</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body>  
    <div class="container"> 
      <h1><center>Product List</center></h1> 
      <table class="table table-striped"> 
        <thead> 
          <tr> 
            <th scope="col">#</th> 
            <th scope="col">Product Name</th> 
            <th scope="col">Price</th> 
          </tr> 
        </thead> 
        <?php 
          $count = 0; 
          foreach ($product->result() as $row) : 
            $count++; 
        ?> 
          <tr> 
            <th scope="row"><?php echo $count;?></th> 
            <td><?php echo $row->product_name;?></td> 
            <td><?php echo number_format($row->product_price);?></td> 
          </tr> 
        <?php endforeach;?> 
        </tbody> 
      </table>  
    </div>  
    <!-- load jquery js file --> 
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html>
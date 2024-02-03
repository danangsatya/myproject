<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>  
</head>

<body class="fix-header fix-sidebar card-no-border">

	<div id="main-wrapper">
		<main class="main">
			<?php $this->load->view('admin/_partials/side_nav.php') ?>
			<?php $this->load->view('admin/_partials/header.php') ?>
			<div class="page-wrapper">
			<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">User View</li>
                            <li class="breadcrumb-item active">add user</li>
                        </ol>
                	</div>
				</div>
				<div class="content">
                <h1><center>Add New Product</center></h1> 
        <div class="col-md-6 offset-md-3"> 
        <form action="<?php echo site_url('product/save');?>" method="post"> 
          <div class="form-group"> 
            <label>Product Name</label> 
            <input type="text" class="form-control" name="product_name" placeholder="Product Name"> 
          </div> 
          <div class="form-group"> 
            <label>Price</label> 
            <input type="text" class="form-control" name="product_price" placeholder="Price"> 
          </div> 
          <button type="submit" class="btn btn-primary">Submit</button> 
        </form> 
                        </table> 
                        <a href="" class="btn btn-sm btn-danger">Delete</a>	
                        
				</div>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</main>
	</div>
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>
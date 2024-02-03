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
                        </ol>
                	</div>
				</div>
				<div class="content">
                    <body>
                    <h1><center>Table User admin</center></h1> 
                        <table class="table table-striped"> 
                         <thead> 
                            <tr> 
                                <th scope="col">No</th> 
                                <th scope="col">username</th> 
                               
                            </tr> 
                        </thead> 
                        <?php 
                            $count = 0; 
                            foreach ($admin->result() as $row ) : 
                            $count++; 
                        ?> 
                        <tr> 
                            <th scope="row"><?php echo $count;?></th> 
                            <td><?php echo $row->username;?></td>
                        <td>		 
					        <a href="<?php echo site_url('admin/user/delete/'.$row->id_admin);?>" class="btn btn-sm btn-danger">Delete</a>		 
					        <a href="<?php echo site_url('admin/user/get_edit/'.$row->id_admin);?>" class="btn btn-sm btn-danger">Update</a>
					    </td>
                        </tr>
                        <?php endforeach;?> 
                    </tbody> 
                        </table> 
                        <a href="<?php echo site_url('admin/user/add_new');?>" class="btn btn-sm btn-danger">add user</a>	
                        
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